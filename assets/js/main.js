var totalPrice = 0;

$(document).ready(function(){
	init();
});

function init(){

	// Calculer le prix en fonction du prix des ingrédients
	$('.ingPrice').each(function(){
		$this = $(this).html();
		console.log($this);
		if($this != ""){
			var ingPrice = parseFloat($this);
		}
		else{
			var ingPrice = 0;
		}
		totalPrice += ingPrice;
	});
	console.log(totalPrice);
	console.log(Math.round(totalPrice * 100) / 100);
	totalPrice = Math.round(totalPrice * 100) / 100;
	$('#price').html("Prix: " + totalPrice + '€');

	// dans les recettes, changer le nombre de portions
	var oldPortion = $("#portion").val();
	$('.changeportion').on('click', function(){
		// console.log('test');
		var portion = $("#portion").val();
		console.log('portion: ', portion);
		$('.quantite').each(function(){
			var quantite = parseFloat($(this).html());
			if(!isNaN(quantite)){
				var newQuantite = (portion * parseFloat($(this).html())) / oldPortion;
				$(this).html(newQuantite.toFixed(2));
			}
		});	
		// changer le prix
		// il y a un bug dans le calcul des prix -> si je passe de 6 à 10 = ok mais si je passe à 1 quand je repasse à 6, ça fait un mauvais calcul… 
		// var price = parseFloat($("#prix").html());
		if(!isNaN(totalPrice)){
			var newPrice = (portion * totalPrice) / oldPortion;
			console.log(newPrice);
			// $("#prix").html(newPrice.toFixed(2));
			$("#price").html("Prix: " + newPrice.toFixed(2) + '€');
		}

		oldPortion = $("#portion").val();
	});

}







