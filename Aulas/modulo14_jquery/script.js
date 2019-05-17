/* Aula 04 - $(document).ready() */

function initialFunction() {
	console.log("04 - Iniciou!");
}

$(document).ready(function() {
	console.log("04 - Documento carregado!");
});

$(function() {
	console.log("04 - Documento carregado (maneira simplificada)!");
});

$(document).ready(initialFunction);

/* Aula 05 - Evitando conflito */

/*
var $j = jQuery.noConflict();

$j(document).ready(function() {
	console.log("05 - Sem conflitos!");
});
*/

jQuery(document).ready(function() {
	console.log("05 - Funcionando nativamente!");
});

/* Aula 06 - Selecionando Elementos do HTML */

$(function() {
	var element = $('.lista2 li.btn');

	if (element.length > 0) {
		console.log("06 - Elemento existente!");
	}
});

/* Aula 07 - Manipulando Atributos de Tag */

$(function() {
	$('a').attr('href', 'https://www.google.com.br');
	$('img').attr('width', '100');
	$('img').attr('border', '5');
	$('img').attr('border');
});

/* Aula 08 - O que fazer após a seleção? */

$(function() {
	$('#teste p').html('<strong>Texto mudado</strong>');
	$('#teste').find('button').addClass('estilo');
});	

/* Aula 09 - Manipulando Elementos */

$(function() {
	$('#teste').text('Esse é um texto em <strong>NEGRITO</strong> sem HTML.');

	$('img').width(200);
	$('img').height(200);

	$('input').val('Teste');
	$('input').after('<img src="http://www.google.com.br/google.jpg" border="0" alt="Google">');
	$('input').before('<img src="http://www.google.com.br/google.jpg" border="0" alt="Google">');

	$('.lista2').append('<li>Item 5</li>');
	$('.lista2').prepend('<li>Item 0</li>');

	$('input').remove();
});

/* Aula 10 - Transformando Elementos em Objetos */

$(function() {
	var title = $('h1');
	title.html('Titulo novo');

	var div = document.getElementById('div');
	$(div).html('Novo texto');

	$(document.getElementById("div")).html('brand new text');

	// eq() começa por 0
	$('.a10 li:eq(1)').html('Item 2 alterado'); 
	$('.a10 li').eq(2).html('Item 3 alterado');
});

/* Aula 11 - Navegando Entre Elementos */

$(document).ready(function() {
	$('.filha').parent(); // Volta para a div pai
	$('.filha').parent().parent(); // Volta para a div "avô"
	$('body').find('div').eq(0); // Procura a primeira div
	$('body').eq(0); // Procura o primeiro elemento
	$('.irmao').closest('.topo'); // Procura o elemento pai 
	$('.irmao').closest('.site').find('.conteudo'); // Vai de "irmao" para site e então procura "conteudo"
});

/* Aula 12 - CSS, Styling e Dimensões */

$(function() {
	
});