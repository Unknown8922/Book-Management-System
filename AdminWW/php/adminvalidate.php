<?php
session_start();
require('cons.php');

if (isset($_POST['loginsubmit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Retrieve hashed password from the database
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];

            // Compare hashed password
            if (password_verify($password, $hashedPassword)) {
                // Passwords match, start session and redirect to admin panel
                $_SESSION['username'] = $username;
                header("Location: adminpanel.php");
                exit(); // Terminate script after redirect
            } else {
                // Passwords do not match
                echo "<script>alert('Incorrect password')</script>";
                echo "<script>window.open('adminlogin.php','_self')</script>";
                exit(); // Terminate script
            }
        } else {
            // Username not found
            echo "<script>alert('Admin not found')</script>";
            echo "<script>window.open('adminlogin.php','_self')</script>";
            exit(); // Terminate script
        }
    } else {
        // Username or password not provided
        echo "<script>alert('Please enter your username and password')</script>";
        echo "<script>window.open('adminlogin.php','_self')</script>";
        exit(); // Terminate script
    }
}
?>
