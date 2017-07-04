<?php
	include 'connect.php';
	if(!empty($_POST['productName'])){
		$productName = $_POST['productName'];
		$productCode = $_POST['productCode'];
		$productPrice = $_POST['productPrice'];

		$query = $db->query("INSERT INTO currentsale VALUES(null,'".$productCode."','".$productName."','".$productPrice."')");

	}
?>