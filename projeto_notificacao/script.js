function verificarNotificacao() {
	$.ajax({
		url: 'verificar.php',
		type: 'POST',
		dataType: 'json',
		success: function(json) {
			if (json.qt > 0) {
				$('.notificacoes').addClass('tem_notif');
				$('.notificacoes').html(json.qt);
			} else {
				$('.notificacoes').removeClass('tem_notif');
				$('.notificacoes').html('0');
			}
		}
	});

	$.ajax({
		url: 'ler.php',
		success: function(n) {
			if (n.length > 0) {
				$('.box_notif').html(n);
			} else {
				$('.box_notif').html('<h2>Você não tem notificações</h2>');
			}
		}
	});
}

$(function() {
	setInterval(verificarNotificacao, 2000);
	verificarNotificacao();

	$('.notificacoes').on('click', function() {
		$('.box_notif').toggle('fast');
	});

	$('.add_notif').on('click', function() {
		$.ajax({
			url: 'add.php'
		});
	});

	$('.marcar_lido').click(function() {
		alert('Entrou');
		var id = $(this).attr('data-id');

		$.ajax({
			url: 'lido.php',
			type: 'GET',
			data: {id:id}
		});
	});
});