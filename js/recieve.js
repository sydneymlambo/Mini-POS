function insert (){
	var productCode = $("[name='productCode']").val();
	var productName = $("[name='productName']").val();
	var productPrice = $("[name='productPrice']").val();
	var productId = $("[name='productId']").val();
	$.ajax({
		type : "POST",
		url : "includes/insertStock.php",
		data : "productId="+productId+"&productCode="+productCode+"&productName="+productName+"&productPrice="+productPrice,
		success : function (result,error){
			console.log(result);
			$("#error").text(result);
		}
	})
}