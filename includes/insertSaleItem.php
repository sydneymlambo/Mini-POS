<?php
	include 'connect.php';
	if(!empty($_POST['saleId'])){
		$saleId = $_POST['saleId'];
		$productIds = (array)$_POST['productId'];
		$productIds = explode(',',$productIds[0]);
$strquery = "";
for($i = 0; $i <= count($productIds)-1; $i++)
{
		$strquery.= "INSERT INTO saleitems(saleId,productId) VALUES('".$saleId."','".$productIds[$i]."'); ";
		
	}
	$error = "";
if ($db->multi_query($strquery) === TRUE) {
    echo "New records created successfully : {$strquery;

} else {
    echo "Error: " . $strquery . "<br>" . $db->error;
}

	
}
?>