<?php
include 'includes/checkUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>POS - Home Screen</title>
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
				<h2>SALES</h2>
			</div>
			<div id="center" class="titles col-md-4">
				<h2>POS</h2>
			</div>
			<div class="titles col-md-4">
				<h2 class="pull-right"><?php echo $_SESSION['name']; ?></h2>
			</div>
		</header>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<h4>Total</h4>
						</div>
						<div class="col-md-6">
							<h4 id="price" class="pull-right"><input id="totalPrice" type="number" name="totalPrice" disabled="disabled"></h4>
						</div>
					</div><hr>
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<td><h4>Enter SKU</h4></td>
								</tr>
								<tr>
									<td><input type="number" name="productCode" id="sku" class="form-control"></td>
									<td><button id="check" class="btn btn-block btn-info">Query Item</button></td>
									<td><button id="submitItem" class="btn btn-block btn-success">Submit Item</button></td>
								</tr>
								<tr>
									<th>SKU</th>
									<th>Product Name</th>
									<th>Product Price</th>
								</tr>
							</thead>
							<tbody id="data">
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Product</th>
							<th>Qty</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody id="saleData">
						
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">
								<button class="btn btn-block btn-success">Check out</button>
							</td>
							<td>
								<a href="index.php" class="btn btn-block btn-warning">Back</a>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/sales.js"></script>
</body>
</html>