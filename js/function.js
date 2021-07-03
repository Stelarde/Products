$(document).ready(function () {
	$("#productTable").delegate("#hide", "click", function() {
		var product = $(this).closest("tr").find("th").text();
		$(this).closest("tr").hide();
		var quantity = '';

		$.ajax({
			method: "POST",
			url: "../controller/controlTable.php",
			data: { product: product, quantity: quantity }
		});
	});

	$("#productTable").delegate("#less", "click", function() {
		var product = $(this).closest("tr").find("th").text();
		var quantity = $(this).closest("td").find("#labelQuantity").text() - 1;
		$(this).closest("td").find("#labelQuantity").text(quantity);

		$.ajax({
			method: "POST",
			url: "../controller/controlTable.php",
			data: { product: product, quantity: quantity }
		});
	});

	$("#productTable").delegate("#plus", "click", function() {
		var product = $(this).closest("tr").find("th").text();
		var quantity = parseInt($(this).closest("td").find("#labelQuantity").text()) + 1;
		$(this).closest("td").find("#labelQuantity").text(parseInt(quantity));

		$.ajax({
			method: "POST",
			url: "../controller/controlTable.php",
			data: { product: product, quantity: quantity }
		});
	});
})
