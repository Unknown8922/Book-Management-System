<?php 
 session_start();
require('cons.php');

    $username = $_POST['username'];
	$password = $_POST['password'];

if(isset($_POST['loginsubmit'])){

	
	$sql = "SELECT * FROM supplier WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	//$final = mysqli_num_rows($result);

	if($result == 1){
        $_SESSION['username'] = $username;
        header("Location:supplierpanel.php");
        
	}else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('supplierlogin.php','_self')</script>";
		
	}
}


?>