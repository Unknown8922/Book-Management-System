<?php

require('cons.php');

if (isset($_POST['adminregister'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];

    $sql = "INSERT INTO customers VALUES(NULL, '$name', '$address', '$gender', '$phone_number', '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('New User Registered Successfully')</script>";
        echo "<script>window.open('addusers.php','_self')</script>";
    } else {
        echo "<script>alert('Sorry, an error occurred')</script>";
        // echo "<script>window.open('adminpanel.php','_self')</script>";
    }
} else {
    echo "<script>alert('Sorry, Passwords do not match')</script>";
    echo "<script>window.open('signup.php','_self')</script>";
}

?>
