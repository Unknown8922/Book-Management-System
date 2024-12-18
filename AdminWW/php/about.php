<?php include("header.php");?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Add custom style for the container to move it to the right */
        .custom-container {
            margin-left: 500px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
    <!-- Remove the unnecessary <div> tag -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 custom-container">
                <div class="card">
                    <div class="card-body" style="background-color:  #537895; color: white; border-color: #06F2F8; text-align: center;">
                        <h5>About US</h5>
                    </div>
                    <center>
                        <h1>You Can Search and Order from three different Award Winning Suppliers Below</h1>
                        <div class="card">
                            <div class="card-body" style="background-color:  #537895; color: white; text-align: center;">
                                <img src="../images/Banbury.png" alt="" height="300px">
                            </div>
                            <div class="card-body" style="background-color:  #537895; color: white; text-align: center;">
                                <img src="../images/cerebro.png" alt="" height="300px">
                            </div>
                            <div class="card-body" style="background-color:  #537895; color: white; text-align: center;">
                                <img src="../images/plutonium.png" alt="" height="300px">
                            </div>
                        </div>
                    </center>
                   
                </div>
            </div>
        </div>
    </div>
</body>

<?php include("footer.php");?>

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
</body>
</html>
