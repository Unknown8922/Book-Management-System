
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



</head>
<body style="background: linear-gradient(135deg, #09203F, #537895); no-repeat background-size:cover; opacity ">
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
		<div class="bx bx-menu" id="menu-icon"></div>

	</header>

<style>
        

        footer {
            background-color: #09203F;
            color: #fff;
            padding: 40px 0;
            margin-top: 100px; /* Increase this value to move the footer down further */
            border-top: 1px solid rgba(255, 255, 255, 0.1);
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
					<a href="userlogin.php" class="btn btn-danger" style="background-color: #09203F; color: white; border-color: wheat;">User Login</a>
					<a href="supplierlogin.php" class="btn btn-danger" style="background-color: #09203F; color: white; border-color: wheat;">Supplier Login</a>
					<a href="index.php" class="btn btn-warning" style="background-color: #537895; color: white; border-color: #09203F;">Back To Home</a>

</div>
<div class="container" style="width: 400px; margin-top:50px";>
	<div class="card">
       <img src="../images/adminlogin.jpg" class="card-img-top" width="100px" height="300px">
		<div class="card-body">

			<center><h3> Admin Login</h3></center><br>

	<form class="form-group" action="adminvalidate.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Enter your Username" required=""><br>
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter your password" required=""><br>
		<center>
		<input type="submit" name="loginsubmit"  class="btn btn-primary" value="Login" style="background-color: #09203F; color: white; border-color: #09203F"; >		
		</center>
		
	</form>
</div>
</div>
</div>
  <div class="icons">
    <a href="https://www.facebook.com/mbrlae/"><i class="ri-facebook-circle-line"></i></a>
    <a href="https://www.youtube.com/channel/UCC3EuLLnHUF4fEupSgmzGeQ"><i class="ri-youtube-line"></i></a>
    <a href="https://twitter.com/mbrlae?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="ri-twitter-line"></i></a>
    <a href="https://www.instagram.com/mbrlae/?hl=en"><i class="ri-instagram-line"></i></a>
  </div>
 <footer id="footer">
        <div class="container-footer">
            <div class="row">
                <div class="col-sm-12">
                    <center> Library Management System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>

                    
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>