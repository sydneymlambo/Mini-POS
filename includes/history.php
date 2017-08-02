<?php
include 'connect.php';

$saleQuery = "SELECT * FROM sales";
$saleQueryResult = mysqli_query($db,$saleQuery);



while($row = mysqli_fetch_array($saleQueryResult)){
	$query = "SELECT si.saleId,saleDate,totalPrice,si.productId,pr.productName,pr.productPrice
	FROM saleitems si
	INNER JOIN sales s ON si.saleId = s.saleId
	INNER JOIN products pr ON si.productId = pr.productId";

$queryResult = mysqli_query($db,$query);
	?>
	<table class="table table-bodered">
		<tr>
			<th><h4>Sale Number</h4></th>
			<th><h4>Date and Time</h4></th>
			<th><h4>Total Price</h4></th>
		</tr>

		<tr>
			<td><?php echo $row['saleId']; ?></td>
			<td><?php echo $row['saleDate']; ?></td>
			<td><?php echo $row['totalPrice']; ?></td>
		</tr>
		<tr>
			<th>Product Code</th>
			<th>Product Description</th>
			<th>Product Price</th>
		</tr>
		 <?php
		while($rows = mysqli_fetch_array($queryResult)){
			if($rows['saleId'] === $row['saleId']){
			?>
			
			<tr>
				<td><?php echo $rows['productId']; ?></td>
				<td><?php echo $rows['productName']; ?></td>
				<td><?php echo $rows['productPrice']; ?></td>
			</tr> 
			<?php	
			}
		} ?>

	</table>
	<hr>
	 <?php
}

?>