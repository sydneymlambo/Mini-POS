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
var totalPrice = 0;
var arrItems = [];
function itemInArray(item){
	var itemQty = $("#qty"+item);
	if(itemQty.length){
		return true;
	}else{
		return false;
	}
}
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
				
				if(!itemInArray(val.productCode)){
					var newRow = $("<tr id='"+val.productCode+"'>");
					console.log("not exts");
					newRow.html("<span id='spn"+itemsCounter+"' style='display: none;'>"+val.productId+"</span><td><input type='number' disabled='disabled' name='"+productCode+"' value='"+val.productId+"'></td><td>"+val.productName+"</td><td id='qty"+val.productCode+"'>1</td><td><input type='text' id='x' disabled='disabled' name='"+val.productPrice+"' value='"+val.productPrice+"'></td>");	
					saleData.append(newRow);
					itemsCounter++;
				}else{
					var currentQty = parseInt($('#qty'+val.productCode).html());
					currentQty++;
					$('#qty'+val.productCode).html(currentQty);
					console.log("exts");
				}
				//newRow.html("<td><input type='number' disabled='disabled' name='"+productCode+"' value='"+val.productCode+"'></td><td>"+val.productName+"</td><td id='qty"+val.productCode+"'></td><td><input type='text' id='x' disabled='disabled' name='"+val.productPrice+"' value='"+val.productPrice+"'></td>");
				
				totalPrice = (parseFloat(totalPrice) + parseFloat(val.productPrice));
				
				
			})
			$("#totalPrice").val(totalPrice);
		}
	})
})
var itemsCounter = 1;
$("#checkOut").on('click',function(){



//alert(strItems);

	var totalPrice = $("[name='totalPrice']").val();
	$.ajax({
		type : "POST",
		url : "includes/insertSale.php",
		data : "totalPrice="+totalPrice,
		success : function(result){
			
			var arrItems = new Array();


for(var i = 1; i <= itemsCounter -1; i++)
{
	var productId = $('#spn'+i).html();
	//alert(productId);
	arrItems.push(productId);
	
}



$.ajax({
		url : "includes/insertSaleItem.php",
		data : "saleId="+result+"&productId="+arrItems,
		type : "POST",
		success : function (result){
		console.log(result);
		$("#error").text("Sale Proccessed click back or refresh!");
		}
	})

//alert(strItems);

			
		}
	})
})