$(document).ready(function() {
	var horaescolhaCampo;

	$('input').bind('focus', function() {
		var pos = $(this).offset();
		var width = $(this).width();

		$('.horaescolha').css('left', pos.left + width + 10);
		$('.horaescolha').css('top', pos.top);

		setTimeout(function() {
			$('.horaescolha').show();
		}, 105);

		horaescolhaCampo = $(this);
	});

	$('input').bind('blur', function() {
		setTimeout(function() {
			$('.horaescolha').hide();
		}, 100);
	});

	$('.horaescolha button').bind('click', function() {
		var hora = $(this).html();
		horaescolhaCampo.val(hora);
	});
});