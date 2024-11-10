<!DOCTYPE html>
<html>
<head>
	

<?php include('suppliers_process.php') ?>
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

<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>
<div class="container" style="width: 1500px; margin-top:100px";>
	<div class="card">
       
    	<div class="card-body" style="background-color: #537895; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-2">
         <a href="adminpanel.php" class="btn btn-light">Click to go back</a></div>
		<div class="col-md-6">
		<!--<img src="../images/bg.png">-->
		<center><h4> List Of Users</h4> </center></div>
		 <div class="col-md5">
		 	
		 	<form action="orderbydate.php" method="post" class="form-group">
		 		<div class="row">
		 		<div class="col-md-9"><input type="text" name="search" class="form-control" required placeholder="Enter Date"></div>
		 		<div class="col-md-3"><input type="submit" name="search_button" class="btn btn-light" value="Search"></div>
		 	</div>
		 	</form>
		 	
		 </div>
		 </div>
	</div>
		<div class="card-body">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Customer ID</th> 
      <th scope="col">Name</th>
      <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Phone</th>
         <th scope="col">Email</th>
      <th scope="col">Username</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
      view_users();  
     ?>
  </tbody>
</table>
			
		</div>
	</div>
</div>

<footer id="footer">
    <div class="container-footer">
        <div class="row">
            <div class="col-sm-12">
                <center> Dubai Books Library Management System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                <div class="icons footer-icons">
                    <a href="https://www.facebook.com/mbrlae/"><i class="ri-facebook-circle-line"></i></a>
                    <a href="https://www.youtube.com/channel/UCC3EuLLnHUF4fEupSgmzGeQ"><i class="ri-youtube-line"></i></a>
                    <a href="https://twitter.com/mbrlae?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="ri-twitter-line"></i></a>
                    <a href="https://www.instagram.com/mbrlae/?hl=en"><i class="ri-instagram-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>