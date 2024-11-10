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

 <?php
                    require('cons.php');
				    require('userlogin_process.php');	
				    $var1 ='';
				    $var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM users WHERE name = '$var1'";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $name =  $row['name'];
				       $phone = $row['phone_number'];
				       $email = $row['email'];
				       $address = $row['address'];
				       $uname = $row['username'];
				       $password =   $row['password'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
  
                    ?>

<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #537895; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="Searchfeature.php" class="list-group-item">Search Book</a>
					<a href="orderform.php" class="list-group-item">Order Book</a>
					<a href="" class="list-group-item">My Orders</a>
					
					
                    
                     </div>
					

				
			</div>
		
		<div class="col-md-6">
			<div class="card">
					<div class="card-body" style="background-color: #537895;; color: white; text-align: center;">
				
                      

				<h5 >Update My Profile </h5></div>
				<div class="card-body" >
					<form class="form-group" action="userupdate_process.php" method="POST" enctype="multipart/form-data"> 	
					
					 <label>Fullname</label>
						<input type="text" name="fullname"  class="form-control" value="<?php echo $name; ?>" readonly><br>
					<label>Phone Number</label>
						<input type="number" name="number"  class="form-control" value="<?php echo $phone; ?>" min=10><br>
					<label>Email</label>
						<input type="email" name="email"  class="form-control" value="<?php echo $email; ?>"><br>
					<label>Address</label>
						<input type="text" name="address"  class="form-control" value="<?php echo $address; ?>"><br>
					<label>Username</label>
						<input type="text" name="username"  class="form-control" value="<?php echo $uname; ?>"><br>
					<label>Password</label>
						<input type="text" name="password"  class="form-control" value="<?php echo $password; ?>"><br>
					
                     
					
						<center> <input type="submit" name="update" value="Update Details" class="btn btn-primary" style="background-color: #09203F; color: white; border-color: #09203F;"></center>

					</form>
				</div>
			</div><p><br><p><p>
		</div>
<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #537895;; color: white;"><h3 align="center">My Profile</h3>
					
                    <a href="userupdate.php" class="list-group-item">Update profile</a>
					<a href="" class="list-group-item">My Orders</a>
					
					
                    
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
