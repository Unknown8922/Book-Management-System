<?php include("header.php");?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="background-color:  #537895; color: white; border-color: #06F2F8; text-align: center;">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="card-body">
                        
                        
<h3><p>Getting in touch is so easy :</p><h3>
<h4><p>Address</p></h4>
<p>Al Jaddaf, Al Khail Road, Dubai, United Arab Emirates</p>

<h4><p>Call Centre</p></h4>
<p>800MBRLAE  (800627523)</p>


<h4><p>Email</p></h4>
<p>info@mbrl.ae</p>
                    </div>
                </div>
            </div>

            <!-- Add the image on the right side with increased size -->
            <div class="col-md-5">
                <img src="../images/customerservice.png" alt="Your Image" class="img-fluid" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>

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
