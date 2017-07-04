<?php
include 'includes/login.config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>POS - Login</title>
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
				<h2>Title</h2>
			</div>
			<div id="center" class="titles col-md-4">
				<h2>POS</h2>
			</div>
			<div class="titles col-md-4">
				<h2 class="pull-right">User</h2>
			</div>
		</header>
	</div>
	<hr>
	<div class="container">
		<form action="login.php" method="post">
			<table class="table table-striped">
				<tr>
					<td><h3>Username:</h3></td>
					<td><input class="form-control" type="text" name="username" required="required"></td>
				</tr>
				<tr>
				<td><h3>Password:</h3></td>
					<td><input class="form-control" type="password" name="password" required="required"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" class="btn btn-success btn-block"><h3>Login</h3></button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>