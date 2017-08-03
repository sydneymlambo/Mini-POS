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
	<div class="container">
	<hr>
	<a href="index.php" class="btn btn-block btn-warning">Back</a>
	<hr>
		<?php include 'includes/history.php'; ?>
	
	</div>
	<script src="js/jquery.js"></script>
</body>
</html>