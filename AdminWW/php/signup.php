<?php include("header.php");?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  

    <body>
	<style>
        .custom-container {
            margin-left: 500px; /* Adjust the margin as needed */
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
					<a href="supplierreg.php" class="btn btn-danger" style="background-color: #09203F; color: white; border-color: wheat;">Supplier Sign Up</a>
					<a href="adminsignup.php" class="btn btn-danger" style="background-color: #09203F; color: white; border-color: wheat;">Admin Sign Up</a>
					<a href="new_index.php" class="btn btn-warning" style="background-color: #537895; color: white; border-color: #09203F;">Back To Home</a>

					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>

</div>
<div class="container" style="width: 500px; margin-top:20px";>
	<div class="card">
       <img src="../images/userreg.png" class="card-img-top" width="100px" height="300px">
		<div class="card-body">

	<form class="form-group" action="signup_process.php" method="post">

		<center><h3> User Registration</h3></center><br>
		            
					<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
					<label>Phone Number</label>
						<input type="number" name="number" class="form-control" required="number">
					<label>Email</label>
						<input type="email" name="email" class="form-control" required="number">
					<label>Address</label>
						<input type="text" name="address" class="form-control" required="number">
					<label>Gender</label>
						<select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					<label>Username</label>
			             <input type="text" name="username" class="form-control" placeholder="Enter your Username" required="">
			         <label>Password</label>
			             <input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
                     <label>Confirm Password</label>
			             <input type="password" name="cpassword" class="form-control" placeholder="Enter your password Again" required=""><BR>
		<center>
		<input type="submit" name="userregister"  class="btn btn-primary" value="Register" style="background-color: #537895; color: white; border-color: #09203F;">	
		</center>
		
	</form>
</div>
</div>
</div>
 
          <footer id="footer">
    <div class="container-footer">
        <div class="row">
            <div class="col-sm-12">
                <center> Dubai Books Library Management System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                
            </div>
        </div>
    </div>
</footer><!--/#footer-->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>