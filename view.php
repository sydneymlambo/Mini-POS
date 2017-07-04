<?php
include 'includes/checkUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>POS - Stock Review</title>
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
				<h2>STOCK REVIEW</h2>
			</div>
			<div id="center" class="titles col-md-4">
				<h2>POS</h2>
			</div>
			<div class="titles col-md-4">
				<h2 class="pull-right"><?php echo $_SESSION['name']; ?></h2>
			</div>
		</header>
	</div><hr>
	<div class="container-fluid">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th><h3>Product ID<h3></th>
						<th><h3>Product SKU<h3></th>
						<th><h3>Product Name<h3></th>
						<th><h3>Product Price<h3></th>
					</tr>
				</thead>
				<tbody id="stockData">
					
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4">
							<a href="index.php" class="btn btn-block btn-warning"><h4>Back</h4></a>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/stock.js"></script>
</body>
</html>