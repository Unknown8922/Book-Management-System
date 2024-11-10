<!DOCTYPE html>
<?php include('suppliers_process.php'); ?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background:url('../images/cc.jpeg'); no-repeat background-size:cover; opacity: 2 ; ">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt=""></a>

</div>

	<div class="container" style="width: 800px; margin-top:100px";>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<a href="adminpanel.php" class="btn btn-danger">Back to admin</a>
						
					</div>
				<h3 style="color: brown;"> Search Result </h3>
				</div>	
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
								<th scope="col">Order ID</th> 
	      <th scope="col">Book ID</th>
	      <th scope="col">Quantity</th>
	        <th scope="col">Customer ID</th>
	         <th scope="col">Delivery Address</th>
	      <th scope="col">Order Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
                             search_by_date();
						?>
						
					</tbody>
				</table>
				
			</div>
		</div>
		
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>





