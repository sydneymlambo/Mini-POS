$("#check").on('click', function(e){
	var productCode = $("[name='productCode']").val();

	$.ajax({
		url : "includes/getProduct.php",
		type : "GET",
		data : "productCode="+productCode,
		success : function (result){
			var data = $("#data");
			var parse = JSON.parse(result);

			$.each(parse, function(key,val){
				var row = $("<tr>");
				row.html('<td>'+val.productCode+'</td><td>'+val.productName+'</td><td>'+val.productPrice+'</td>');
				data.html(row);
			})
		}

	})
})
$("#submitItem").on('click',function(e){
	var productCode = $("[name='productCode']").val();
	var productcode2 = $()
	$.ajax({
		url : "includes/getProduct.php",
		type : "GET",
		data : "productCode="+productCode,
		success : function (result){
			var saleData = $("#saleData");
			var parsed = JSON.parse(result);
			
			$.each(parsed, function(key,val){
				var newRow = $("<tr>");
				newRow.html("<td><input type='number' disabled='disabled' name='"+productCode+"' value='"+val.productCode+"'></td><td>"+val.productName+"</td><td><input type='text' id='x' disabled='disabled' name='"+val.productPrice+"' value='"+val.productPrice+"'></td>");
				saleData.append(newRow);
				function add(){
					return totalPrice + x;
				}
				function prints(){
					var totalPrice = val.productPrice;
					add();
					console.log(totalPrice);
				}
				prints();
				
			})
		}
	})
})