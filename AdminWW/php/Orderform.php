<!--https://teamtreehouse.com/community/php-include-headerfooter-best-practice-->
<?php include 'userlogin_process.php';
$var1 ='';
$var2 ='';
$var1 = $_SESSION['name'];
$var2 = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
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
            margin-top: 100px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .custom-container {
            background-color: #fff;
            padding: 10px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
    </style>
</head>
<body>

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


    <div class="custom-container">
        <div id="mainContent" style="width: 100%">
            <div id="header" style="border-bottom:2px solid #DDEEFF; display:block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
                <h2> Order a Book </h2>
            </div>
        </div>


    <div id="bodyContent">

    <form name="orderForm" id="orderForm" action="orderclient.php" method="post">


<table border="0" cellpadding="10" cellspacing="5" width="100%">
    <tr>
    <td width="30%" align="left">
        <select name="supname" class="form-control">
            <option>Select Supplier</option>

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

    <table border="0" cellpadding="10" cellspacing="5" width="100%">
    <tr>
    <td width="30%" align="left">
    <label for="title" class="btn btn-warning">
<span class="glyphicon glyphicon-book"></span>Book name:</label>

    </td>
<td width="30%" align="right">  
    <select name="title" class="form-control">
            <option>Select Book</option>-->

         <?php

             
          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banbury_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
          $sql = "SELECT * From books";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['bid'] ."'>" .$row['title'] ."</option>" ;
          }
           ?>



         <?php

             
          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cerebro_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
          $sql = "SELECT * From books";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['bid'] ."'>" .$row['title'] ."</option>" ;
          }
           ?>



         <?php

             
          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plutonium_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
          $sql = "SELECT * From books";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['bid'] ."'>" .$row['title'] ."</option>" ;
          }
           ?>
</select>
</td>   </tr>


    <tr>
    <td width="30%" align="right">
    <label for="qty">Quantity:</label>
    </td>
    <td width="70%" align="left">
    <input type="number" name="qty" required="" min=1>
    </td>
    </tr>

    <tr>
    <td width="30%" align="right">
    <label for="aut">Book Author:</label>
    </td>
    <td width="70%" align="left">
    <select name="aut" class="form-control">
            <option>Select book Author</option>

         <?php
                   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banbury_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
          $sql = "SELECT * From books";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['bid'] ."'>" .$row['author'] ."</option>";
          }
           ?>
</select>
    </td>
    </tr>

    <tr>
    <td width="30%" align="right">
    <label for="cname" class="btn btn-warning">
          <span class="glyphicon glyphicon-user"></span>CustomerName:
    </label>
    </td>
    <td width="70%" align="left">    
    <input type="text" name="cname_user" value="<?php echo $var1 ;?>" required="" readonly>
    <input type="hidden" name="cname" value="<?php echo $var2 ;?>" required="" readonly>
    </td>
    </tr>


    <tr>
    <td width="30%" align="right">
    <label for="address">Delivery Address:</label>
    </td>
    <td width="70%" align="left">
    <textarea name="address">
    </textarea>
    </td>
    </tr>


    <tr>
    <td width="30%" align="right">
    <label for="pno">Card Number:</label>
    </td>
    <td width="70%" align="left">
    <input type="number" name="cno" required="" >
    </td>
    </tr>

    <tr>
    <td width="30%" align="right"></td>
    <td width="70%" align="left">
    <input type="submit" name="goForAddNewBook" value="Order Book"
    class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus-sign"></span>
    </td>
    </tr>

    </table>
    </form>
    </div>
    </div>
<div id="footer" style="border-top:2px solid #DDEEFF; display:block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
  
 <footer id="footer">
        <div class="container-footer">
            <div class="row">
                <div class="col-sm-12">
                    <center> Dubai Books Library Management System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>

                    
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
