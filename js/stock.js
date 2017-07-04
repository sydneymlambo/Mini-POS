$.ajax({
	url : "includes/fetchStockList.php",
	data : "",
	type : "GET",
	success : function (result){
		var parse = JSON.parse(result);
		var data = $("#stockData");

		$.each(parse, function(key,val){
			var row = $("<tr>");
			row.html("<td>"+val.id+"</td><td>"+val.productCode+"</td><td>"+val.productName+"</td><td>"+val.productPrice+"</td>");

			data.append(row);
		})
	}
})