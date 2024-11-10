<?php 

if(isset($_POST['comp'])){
require('cons.php');
require('userlogin_process.php');
	$var1 ='';
    $var1 = $_SESSION['name'];
	
    $msg = $_POST['msg'];	
    $sup = $_POST['sup'];

    $todayDate = date("Y-m-d H:i:s");
    
	
$sql = "INSERT INTO user_comp (id, user, comp, supplier) VALUES(NULL, '$var1', '$msg', '$sup')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Enquiry sent  Succesfully')</script>";
	echo "<script>window.open('userpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";

	//ho "<script>window.open('adminpanel.php','_self')</script>";
}
}

?>