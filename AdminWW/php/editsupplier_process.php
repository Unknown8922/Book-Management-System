<?php 

require('cons.php');
//require('staffvalidate.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
	$wsdl = $_POST['wsdl'];
	
	

  $sql= "UPDATE `registry` SET `supid` = '$id', `supname` = '$name', `wsdlurl` = '$wsdl' WHERE `registry`.`supid` = '$id'";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>