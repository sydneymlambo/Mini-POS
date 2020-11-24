<?php
include 'includes/checkUser.php';
include 'head.php';
?>

<body>
	<div class="container-fluid titleBar">
		<header class="col-md-12">
			<div class="titles col-md-4">
				<h2>HOME</h2>
			</div>
			<div id="center" class="titles col-md-4">
				<h2>POS</h2>
			</div>
			<div class="titles col-md-4">
				<h2 class="pull-right"><?php echo $_SESSION['name']; ?></h2>
			</div>
		</header>
	</div>
	<hr>
	<section class="container">
		<table class="table table-bordered">
			<tr>
				<th><a class="btn btn-success btn-block" href="sales.php"><h2>Sales</h2></a></th>
			</tr>
			<tr>
				<th><a class="btn btn-success btn-block" href="view.php"><h2>Review Stock</h2></a></th>
			</tr>
			<tr>
				<th><a class="btn btn-success btn-block" href="recieve.php"><h2>Recieve Stock</h2></a></th>
			</tr>
			<tr>
				<th><a class="btn btn-success btn-block" href="saleHistory.php"><h2>View Sale History</h2></a></th>
			</tr>
			<tr>
				<th><a class="btn btn-warning btn-block" href="logout.php"><h2>Log Out</h2></a></th>
			</tr>
		</table>
	</section>
    <?php include 'end-head.php'; ?>