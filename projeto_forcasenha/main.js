$(document).ready(function() {
	$('#senha').bind('keyup', function() {

		var txt = $(this).val();
		var forca = 0;

		if (txt.length > 6) {
			forca += 25;
		}

		var reg = new RegExp(/[a-z]/i); 
		if (reg.test(txt)) {
			forca += 25;
		}

		var reg = new RegExp(/[0-9]/i); 
		if (reg.test(txt)) {
			forca += 25;
		}

		var reg = new RegExp(/[^a-z0-9]/i); 
		if (reg.test(txt)) {
			forca += 25;
		}

		if (forca >= 75) {
			var aceita = 'ACEITA';
		} else {
			var aceita = 'RECUSADA';
		}

		if (forca == 0) {
			$('#forca').css('background-color', '#FF2800');
		} else if (forca == 25) {
			$('#forca').css('background-color', '#FD6A02');
		} else if (forca == 50) {
			$('#forca').css('background-color', '#FFD300');
		} else if (forca == 75) {
			$('#forca').css('background-color', '#1034A6');
		} else {
			$('#forca').css('background-color', '#0B6623');
		}

		$('.result').html(txt + ' - ' + aceita + ' - ' + forca);
	});
});