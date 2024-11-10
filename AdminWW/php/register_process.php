<?php 

require('connection.php');
if(isset($_POST['register'])){
    
    $name = $_POST['fullname'];
	$email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];	


    if($password == $cpassword){
	
$sql = "INSERT INTO student (sn,  fullname, email, address, gender, username, password) VALUES(NULL, '$name', '$email', '$address', '$gender', '$username', '$password')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New User Registed Succesfully')</script>";
	echo "<script>window.open('userlogin.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "<script>alert('Sorry Password do not match')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
}
}


?>