<?php
include 'includes/checkUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>POS - Recieve Stock</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<div class="container-fluid titleBar">
		<header class="col-md-12">
			<div class="titles col-md-4">
				<h2>RECIEVE STOCK</h2>
			</div>
			<div id="center" class="titles col-md-4">
				<h2>POS</h2>
			</div>
			<div class="titles col-md-4">
				<h2 class="pull-right"><?php echo $_SESSION['name']; ?></h2>
			</div>
		</header>
	</div>
	<div class="container">
		<table class="table table-default">
			<tr>
				<th>Product SKU</th>
				<td><input type="number" name="productCode" class="form-control" required="required"></td>
			</tr>
			<tr>
				<th>Product Name</th>
				<td><input type="text" name="productName" class="form-control" required="required"></td>
			</tr>
			<tr>
				<th>Product Price</th>
				<td><input type="number" name="productPrice" class="form-control" required="required"></td>
			</tr>
			<tr>
				<td>
					<a class="btn btn-block btn-warning" href="index.php"><h4>Back</h4></a>
				</td>
				<td>
					<button onclick="insert()" class="btn btn-block btn-success"><h4>Submit Product</h4></button>
				</td>
			</tr>
			<tr>
				<td colspan="3" id="error"></td>
			</tr>
		</table>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/recieve.js"></script>
</body>
</html>