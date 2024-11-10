<?php 

require('cons.php');
require('userlogin.php');
$var1 ='';
$var1 = $_SESSION['name'] ;

if(isset($_POST['update'])){
    $name = $_POST['fullname'];
	$phone = $_POST['number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

  $sql= "UPDATE `users` SET  `phone_number` = '$phone', `email` = '$email', `address` = '$address',  `username` = '$username',  `password` = '$password' WHERE `users`.`name` = '$var1'";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('userpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>