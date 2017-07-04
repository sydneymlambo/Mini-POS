<?php
	include 'connect.php';
	if(!empty($_GET['productCode'])){
		$productCode = $_GET['productCode'];
		$query = $db->query("SELECT productCode, productName, productPrice FROM products WHERE(productCode = '$productCode')");
		$result = array();
		while($fetch = $query->fetch_assoc()){
			$result[] = $fetch;
		}
		echo json_encode($result);
	}
?>