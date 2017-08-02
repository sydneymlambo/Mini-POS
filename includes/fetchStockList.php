<?php
	include 'connect.php';

	$query = $db->query("SELECT * FROM products ORDER BY productId");
	$result = array();

	while($fetch = $query->fetch_assoc()){
		$result[] = $fetch;
	}
	echo json_encode($result);
?>