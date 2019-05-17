/* Aula 42 - Método Auxiliares de Ajax */

$(function() {
	$('.a42 button').bind('click', function() {

		$('.a42 .div').load('teste.html');

		$.get('teste.html', function(t) {
			$('.a42 .div').html(t);
		});

		$.post('teste.html', function(t) {
			$('.a42 .div').html(t);
		});
	});
});

/* Aula 43 - Método Serialize */

$(function() {
	$('#form').bind('submit', function(e) {
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);
	});
});

/* Aula 44 - Requisição Ajax Completa */

$(function() {
	$('.a44 #form').bind('submit', function(e) {
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);

		$.ajax({
			type: 'POST',
			url: 'ajax.php',
			data: txt,
			success: function(html) {
				$('.a44 .div').html('Resultado: '+ html);
			},
			error: function() {
				alert('Ocorreu um erro!');
			}
		});

	});
});

/* Aula 45 - Recebendo e manipulando JSON */

$(function() {
	$('.a45 #form').bind('submit', function(e){
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);

		$.ajax({
			type: 'POST',
			url: 'ajax2.php',
			data: txt,
			dataType: 'json',
			success: function(json) {
				console.log(json);
				console.log(json.status);
				// alert('Name: '+ json.nome);
				// alert('Name (length): '+ json.qt_nome);
				// alert('Password: '+ json.senha);
			},
			error: function(json) {
				console.log('json não retornou!');
			}
		});
	});
});

/* Aula 46 - Como usar um Plugin jQuery? */

$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});

/* Aula 47 - Como criar seu próprio Plugin jQuery? */

$(function() {
	$('.a47 a').modifiyLink();
	$('.a47 a').changeColor('#333333');
});
