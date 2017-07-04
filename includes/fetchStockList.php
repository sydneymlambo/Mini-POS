<?php
	include 'connect.php';

	$query = $db->query("SELECT * FROM products");
	$result = array();

	while($fetch = $query->fetch_assoc()){
		$result[] = $fetch;
	}
	echo json_encode($result);
?>