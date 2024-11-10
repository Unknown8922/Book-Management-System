
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

 <div class="icons">
    <a href="https://www.facebook.com/mbrlae/"><i class="ri-facebook-circle-line"></i></a>
    <a href="https://www.youtube.com/channel/UCC3EuLLnHUF4fEupSgmzGeQ"><i class="ri-youtube-line"></i></a>
    <a href="https://twitter.com/mbrlae?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="ri-twitter-line"></i></a>
    <a href="https://www.instagram.com/mbrlae/?hl=en"><i class="ri-instagram-line"></i></a>
  </div>
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
            padding: 40px 0;
            margin-top: 200px; /* Increase this value to move the footer down further */
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
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>
<div class="container" style="margin-top: 20px;">
    <center><a href="new_index.php" class="btn btn-danger" style="background-color: #09203F; color: white; border-color: #09203F;">Click to go back</a></center>
</div>

 <div class="col-md-5">
        </div>
        <div class="container" style="width: 400px; margin-top:20px;">
        <div class="card">
            <img src="../images/searchbooks.jpg" class="card-img-top" height="250px" width="200px">
            <div class="card-body">
                <center><h3> Books Search</h3></center><br>
	
	<form class="form-group" action="Searchclient.php" method="post">
		<label>Supplier Name</label>
		<select name="supname" class="form-control">
			<option>Select Suplier</option>

         <?php

	         
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dubaibooks_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

          $sql = "SELECT * From registry";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['supid'] ."'>" .$row['supname'] ."</option>" ;
          }
           ?>
</select>

     
        <label for="txttitle">Book Title</label>
        <input type="text" name="txttitle" class="form-control" placeholder="Enter book name" required="">
		<label for="txttitle">Book Category</label>
        <input type="text" name="txtcategory" class="form-control" placeholder="Enter book Category" >
        
        <label for="txttitle">Book Author</label>
        <input type="text" name="txtauthor" class="form-control" placeholder="Enter book Author" >
        <label for="txttitle">Book Price</label>
        <input type="number" name="txtprice" class="form-control" placeholder="" ><br>
		
		<center>
		<input type="submit" name="submit"  class="btn btn-danger" value="Search Book" style="background-color: #09203F; color: white; border-color: #09203F;">	
		</center>
		
	</form>
</div>
</div>
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
