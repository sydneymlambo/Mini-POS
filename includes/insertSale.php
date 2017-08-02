<?php
	include 'connect.php';
	$result = "";
	if(!empty($_POST['totalPrice'])){
		$dateAndTime = date('d/m/y H:i');
		$totalPrice = $_POST['totalPrice'];

	$db->query("INSERT INTO sales VALUES(null,'".$dateAndTime."','".$totalPrice."')");
$query = $db->query("SELECT LAST_INSERT_ID() AS id");
	$result = "";
		while($fetch = $query->fetch_assoc()){
			$result = $fetch['id'];
		}
		$result = "Sale proccessed";

	
	}else{
		$result = "Sale not proccessed";
	}
	echo json_encode($result);
?>