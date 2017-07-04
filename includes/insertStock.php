<?php
	include 'connect.php';
	$error = "";
	if(empty($_POST['productCode'])){
		$error = "Enter product code";
	}elseif(empty($_POST['productName'])){
		$error = "Enter product name";
	}elseif (empty($_POST['productPrice'])) {
		$error = "Enter product price";
	}else{
		$productCode = $_POST['productCode'];
		$productName = $_POST['productName'];
		$productPrice = $_POST['productPrice'];

		$query = $db->query("INSERT INTO products VALUES(null,'".$productCode."','".$productName."','".$productPrice."')");
		$error = "Product successfully entered";
	}
	echo $error;
?>