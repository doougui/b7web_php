$(function() {
	$('button').on('click', function() {
		var nome = $('#nome').val();

		$.ajax({
			url: 'http://localhost/b7web_php/Aulas/modulo16_phpsuperavancado/ajax_mvc/ajax',
			type: 'POST',
			data: {nome: nome},
			dataType: 'json',
			success: function(json) {
				$('.borda').html(json.frase);
			}
		});
	});
});