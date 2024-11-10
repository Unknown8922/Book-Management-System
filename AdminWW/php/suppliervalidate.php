<?php
require('cons.php');

if (isset($_POST['suppregister'])) {
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];

    // Hash the password using the password_hash function
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $username = $_POST['username'];

    if (password_verify($cpassword, $hashedPassword)) {
        $sql = "INSERT INTO supplier (username, password) VALUES('$username', '$hashedPassword')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('New Supplier Registered Successfully')</script>";
            echo "<script>window.open('supplierlogin.php','_self')</script>";
        } else {
            echo "<script>alert('Sorry, an error occurred')</script>";
            // echo "<script>window.open('adminpanel.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Sorry, Passwords do not match')</script>";
        echo "<script>window.open('supplierreg.php','_self')</script>";
    }
}
?>
