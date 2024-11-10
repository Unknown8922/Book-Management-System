<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- CSS link -->
  <link rel="stylesheet" type="text/css" href="index_style.css">

  <!-- boxicons link -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- remixicon link -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">


<head>
	<header>
		<img src="../images/Dubaibookss.png" alt="Logo Image" width="200" height="200" class="d-inline-block align-top">

		<ul class="navlist">
			<li><a href="new_index.php" style="color: white;">Home</a></li>
			<li><a href="Searchfeature.php" style="color: white;">Search</a></li>
			<li><a href="contact.php" style="color: white;">Contact</a></li>
			<li><a href="about.php" style="color: white;">About</a></li>
			<li><a href="userlogin.php" style="color: white;">Login</a></li>
			<li><a href="signup.php" style="color: white;">Register</a></li>
		</ul>
	




	</header>


</head>

 
<body>
	<style>
        body {
            background: linear-gradient(135deg, #09203F, #537895); 
        }

        .navbar-brand {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer {
            background-color: #09203F;
            color: #fff;
            padding: 80px 0;
            margin-top: 100px; /* Increase this value to move the footer down further */
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Adjusted the width and added padding */
        .container-footer {
            width: 100%;
            padding: 0 15px;
        }
    </style>

</div>
</body>

<div class="container-fluid">
                   <!--<?php
                    //session_start();
                    //require('studlogin_process.php'); ?>


           --><marquee  style="color: white;"><h1>WELCOME ADMIN </h1></marquee>

   <?php
                    require('cons.php');
				    //require('staffvalidate.php');	
				    //$var1 ='';
				    //$var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM registry Where supid = 1; ";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $id =  $row['supid'];
				       $name = $row['supname'];
				       $url = $row['wsdlurl'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
      
         ?>
           <?php
                    require('cons.php');
				    //require('staffvalidate.php');	
				    //$var1 ='';
				    //$var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM registry Where supid = 2; ";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $id2 =  $row['supid'];
				       $name2 = $row['supname'];
				       $url2 = $row['wsdlurl'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
      
                    ?>
        <?php
                    require('cons.php');
				    //require('staffvalidate.php');	
				    //$var1 ='';
				    //$var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM registry Where supid = 3; ";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $id3 =  $row['supid'];
				       $name3 = $row['supname'];
				       $url3 = $row['wsdlurl'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
      
                    ?>

	<!<div class ="jumbotron" id="cs1"> </div>





           <div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color:  #537895; color: white; border-color: #06F2F8;"><h3 align="center">Admin Operations</h3>
					
					<a href="" target="_top" class="list-group-item">Add Supplier Details</a>
                  
					<a href="wieworder.php" target="_top" class="list-group-item">View Orders</a>
					<a href="viewusers.php" target="_top" class="list-group-item">View Custormer Details</a>
					<a href="viewcomp.php" target="_top" class="list-group-item">User Enquiries</a>
					<a href="addusers.php" class="list-group-item">Add Users</a>
					<a href="view_supplier.php" class="list-group-item">View Suppliers</a>
                    <a href="deleteuser.php" class="list-group-item">Delete User</a>
					
            
                     </div>
					
			</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-body" style="background-color:  #537895; color: white; text-align: center;">

				
                      

				<img src="../images/Banbury.png" alt=""  height="300px"></div>
				<div class="card-body" >
					<form class="form-group" action="editsupplier_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Supplier ID</label>
						<input type="text" name="id"  class="form-control" value="<?php echo $id; ?>" readonly><br>

					<label>Supplier Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name; ?>"><br>
					<label>WsdlURL</label>
						<input type="text" name="wsdl"  class="form-control" value="<?php echo $url; ?>"><br>
					
					

						<center> <input type="submit" name="update" value="Update" class="btn btn-primary" style="background-color: #09203F; color: white; border-color: #09203F;">
                              <input type="submit" name="update" value="Delete" class="btn btn-danger" >
						</center>

					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
			     <div class="card-body" style="background-color:  #537895; color: white; text-align: center;";>

				
                      

				<img src="../images/cerebro.png" alt=""  height="300px"></div>
				<div class="card-body" >
					<form class="form-group" action="editsupplier_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Supplier ID</label>
						<input type="text" name="id"  class="form-control" value="<?php echo $id2; ?>" readonly><br>

					<label>Supplier Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name2; ?>"><br>
					<label>WsdlURL</label>
						<input type="text" name="wsdl"  class="form-control" value="<?php echo $url2; ?>"><br>
					
					
<center> <input type="submit" name="update" value="Update" class="btn btn-primary" style="background-color: #09203F; color: white; border-color: #09203F;">
                              <input type="submit" name="update" value="Delete" class="btn btn-danger">
						</center>

					</form>
				</div>
			</div>
		</div>
		
<div class="col-md-3">
				<div class="card">
						<div class="card-body" style="background-color:  #537895; color: white; text-align: center;";>

				
                      
<img src="../images/plutonium.png" alt=""  height="300px">
				</div>
				<div class="card-body" >
					<form class="form-group" action="editsupplier_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Supplier ID</label>
						<input type="text" name="id"  class="form-control" value="<?php echo $id3; ?>" readonly><br>

					<label>Supplier Name</label>
						<input type="text" name="name"  class="form-control" value="<?php echo $name3; ?>"><br>
					<label>WsdlURL</label>
						<input type="text" name="wsdl"  class="form-control" value="<?php echo $url3; ?>"><br>
					
					
<center> <input type="submit" name="update" value="Update" class="btn btn-primary" style="background-color: #09203F; color: white; border-color: #09203F;">
                              <input type="submit" name="update" value="Delete" class="btn btn-danger">
						</center>

					</form>
				</div>
			</div>
			
					


  <footer id="footer">
        <div class="container-footer">
            <div class="row">
                <div class="col-sm-12">
                    <center> Library Management System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                    <div class="icons footer-icons">
                        <a href="https://www.facebook.com/mbrlae/"><i class="ri-facebook-circle-line"></i></a>
                        <a href="https://www.youtube.com/channel/UCC3EuLLnHUF4fEupSgmzGeQ"><i
                                class="ri-youtube-line"></i></a>
                        <a href="https://twitter.com/mbrlae?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
                                class="ri-twitter-line"></i></a>
                        <a href="https://www.instagram.com/mbrlae/?hl=en"><i class="ri-instagram-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
});
</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				  Swal.fire({
				  title: 'Welcome Admin',
				  text: 'Enjoy your operations',
				  imageUrl: 'images/logo.jpg',
				  imageWidth: 200,
				  imageHeight: 100,
				  imageAlt: 'Custom image',
				  animation: false
				})
	});

</script> > -->
</body>
</html>