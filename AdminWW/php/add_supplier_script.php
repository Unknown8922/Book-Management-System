<?php 

require('cons.php');
if(isset($_POST['addsup'])){
    $sup_name = $_POST['supname'];
    $address = $_POST['address'];	
	
$sql = "INSERT INTO registry VALUES(null, '$sup_name', '$address')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Student Supplier Registered Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}


?>