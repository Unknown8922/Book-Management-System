<?php

require('cons.php');

if (isset($_POST['userregister'])) {
    $name = $_POST['fullname'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $username = $_POST['username'];

    // Hash the password using the password_hash function
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($password == $cpassword) {

        $sql = "INSERT INTO users (id, name, address, gender, phone_number, email, username, password) VALUES(NULL, '$name', '$address', '$gender', '$phone', '$email', '$username', '$hashedPassword')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('New User Registered Successfully')</script>";
            echo "<script>window.open('userlogin.php','_self')</script>";
        } else {
            echo "<script>alert('Sorry, an error occurred')</script>";
            // echo "<script>window.open('adminpanel.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Sorry, Passwords do not match')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
    }
}

?>
