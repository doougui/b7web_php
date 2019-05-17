/* Aula 12 - CSS, Styling e Dimensões */

$(function() {
	$('.a12 h1').addClass('fundovermelho');
	$('.a12 h1').removeClass('fundovermelho');

	if ($('.a12 h1').hasClass('fundovermelho')) {
		console.log('12 - <h1> tem a classe "fundovermelho"');
	} else {
		console.log('12 - <h1> não tem a classe "fundovermelho"');
	}

	$('.a12 h1').css('color', 'blue');
	$('.a12 h1').css('font-size', '15px');
	$('.a12 button').css('background-color', 'red').css('color', 'white'); // Adicionar várias propriedades CSS (opção 1)
	$('.a12 button').css({"background-color" : "red", "color" : "white"})// Adicionar várias propriedades CSS (opção 2)
});

/* Aula 13 - Guardando dados em um elemento */

$(function() {
	$('.a13 input').data('idade', 16); // Salva dado na memória
	console.log('13 - Idade:', $('.a13 input').data('idade'));
});

/* Aula 14 - Métodos do dia-a-dia */

$(function() {
	var valor = $.trim($('.a14 #algo').html()); // Trim() remove espaços em branco
	console.log('14 -', valor);

	$('.a14 ul li').each(function() {
		console.log('14 -', $(this).html());
	});

	var idade = 90;
	console.log('14 -', $.type(idade)); // Type() retorna tipo da variável

	console.log('14 -', $.isNumeric(idade)); // isNumeric() retorna se é um número ou não
});

/* Aulas 15 a 20 - FAQ */

$(function() {
	if ($('.faq #algo').length > 0) {
		console.log('FAQ - Existe.');
	} else {
		console.log('FAQ - Não existe.');
	}

	if ($('.faq input').hasClass('estilo')) {
		console.log('FAQ - Tem a classe.');
	} else {
		console.log('FAQ - Não tem a classe.');
	}

	$('.faq2 #nome').attr('disabled', 'disabled');
	$('.faq2 #nome').removeAttr('disabled');

	$('.faq2 #salvo').attr('checked', 'checked');

	console.log('FAQ -', $('.faq2 #idade').val());

	$('.faq2 ul li').eq(2).html('Item 3 alterado').css('color', 'green');
	$('.faq2 ul li').eq(4).remove();

	$('.faq2 ul li')[0].innerHTML = "Elemento alterado nativamente.";
	$('.faq2 ul li').eq(1)[0].innerHTML = "Segundo elemento alterado nativamente.";
});

/* Aula 22 e 23 e 24 - Definindo Eventos em Elementos DOM e Eventos Auxiliadores e Removendo Eventos */

$(function() {

	$('.a22 button').click(function() {
		$(this).toggleClass('fundovermelho'); 

		// toggleClass tem a mesma função do código abaixo:
		// if ($(this).hasClass('fundovermelho')) {
		// 	$(this).removeClass('fundovermelho');
		// } else {
		// 	$(this).addClass('fundovermelho');
		// }
	});

	$('.a22 button').hover(function() {
		$(this).addClass('fundovermelho'); // mouseover 
	}, function() {
		$(this).removeClass('fundovermelho'); // mouseout
	});	

	$('.a22 button').hover(function() {
		$(this).toggleClass('fundovermelho'); // Se passado somente uma função, ela vai valer tanto para o over, tanto para o out
	})

	$('.a22 button').bind('click', function() {
		alert('Clicou (bind)!');
	});

	$('.a22 button').on('click', function() {
		alert('Clicou (on)!')
	});

	$('.a22 button').unbind('click');
	$('.a22 button').off('click');

	$('.a22 #btn1').bind('click', function() {
		$('.a22 #btn2').trigger('click');
	});

	$('.a22 #btn2').bind('click', function() {
		alert('Clicou no botão 2!');
	});

	// $('.a22 button').mouseover(function() {
	// 	$(this).addClass('fundovermelho');
	// });

	// $('.a22 button').mouseout(function() {
	// 	$(this).removeClass('fundovermelho');
	// });
});

/* Aulas 26 - Propriedades padrão do evento */

$(function() {

	$('.a26 #botao').bind('click', function(e) {

		e.preventDefault(); // Previne a ação padrão no objeto

		var txt = $('.a26 #nome').val();
		alert(txt);
		alert(e.type);

	});

});

/* Aula 27 - Eventos de Browser */

$(function() {
	$('.a27 #div').bind('scroll', function() {
		console.log('27 - Scroll');
		$(this).toggleClass('fundovermelho'); 
	});

	$(window).bind('resize', function() {
		console.log('27 - Mudou o tamanho da tela');
	});
});

/* Aula 28 - Eventos de Formulário */

$(document).ready(function() {

	$('.a28 #form').bind('submit', function(e) {
		e.preventDefault();

		console.log('28 - The formulary has been submitted.');
	});	

	$('.a28 #nome').bind('select', function() {
		console.log('28 - Something has been selected.');
	});	

	$('.a28 #nome, .a28 #email').bind('focus', function() {
		$(this).addClass('focado');
	});

	$('.a28 #nome, .a28 #email').bind('blur', function() {
		$(this).removeClass('focado');
	});

	$('.a28 #idade').bind('change', function() {
		console.log('28 -', $(this).val());
	});	
});

/* Aula 29 - Eventos de Teclado */

$(function() {

	$('.a29 #nome').bind('keydown', function() {
		console.log('29 - Some key has been pressed.');
	});

	$('.a29 #nome').bind('keyup', function(e) {
		console.log('29 - Some key has been loosened.');
		console.log('29 -', e.keyCode);

		if (e.keyCode == 13) {
			console.log('29 - Enter pressed.');
			$(this).val('');
		}
	});


});	

/* Aula 30 - Eventos de Mouse */

$(function() {

	$('.a30 .botao').bind('mousedown', function() {
		console.log('30 - Mouse button pressed.');
	});

	$('.a30 .botao').bind('mouseup', function() {
		console.log('30 - Mouse button loosened.');
	});

	$('.a30 .botao').bind('mousemove', function() {
		console.log('30 - Mouse moved inside the <div> tag.');
	});

	$('.a30 .botao').bind('mouseover', function() {
		console.log('30 - Mouse is over the <div> tag.');
		$(this).addClass('botao_em_cima');
	});

	$('.a30 .botao').bind('mouseout', function() {
		console.log("30 - Mouse isn't over the <div> tag anymore.");
		$(this).removeClass('botao_em_cima');
	});

	$('.a30 .botao').bind('click', function() {
		console.log('30 - Clicked.');
	});

	$('.a30 .botao').bind('dblclick', function() {
		console.log('30 - Double Clicked.');
	});

});

/* Aula 32 - Elemento aparecer/desaparecer */

$(function() {
	$('.a32 .div').hide('slow');
	$('.a32 .div').show('fast');
	$('.a32 .div').toggle('fast'); // Se visivel, fica invisivel e vice-versa. Tem como parametros "fast" e "slow"
});

/* Aula 33 - Efeitos de Fade */

$(function() {
	$('.a33 .div').fadeIn();
	$('.a33 .div').fadeOut();
	$('.a33 .div').fadeTo('slow', 0.5);
	$('.a33 .div').fadeToggle();
	$('.a33 .div').fadeToggle('fast');
});

/* Aula 34 - Efeitos de Deslizamento (Slide) */

$(function() {
	$('.a34 .div').slideUp();
	$('.a34 .div').slideDown();
	$('.a34 .div').slideToggle('slow');

	$('.a34 .hellobar p').bind('click', function() {
		$('.a34 .hellobar').slideUp('slow');
	});
});

/* Aula 35 - Animações: Como usar o Animate */
/* Aula 36 - Animações: Eventos no Animate */

$(function() {
	$('.a35 .botao').bind('click', function() {
		$('.a35 .div').animate({
			'margin-left': '100px',
			'margin-top': '20px',
			'width': '500px',
			'border-radius': '50%'
		}, /* tempo desejado ou: */ {
			duration: 1500,
			complete: function() {
				console.log('35 - Animação finalizada!');
			},
			start: function() {
				console.log('35 - Animação iniciada!');
			},
			step: function() {
				console.log('35 - Nova etapa!');
			}
		});
	});	
});

/* Aula 37 - FAQ: Como parar uma animação no meio? */

$(function() {
	$('.a37 #btn').bind('click', function() {
		$('.a37 .div').animate({
			'margin-left': '500px'
		}, 2000);
	});

	$('.a37 #btn2').bind('click', function() {
		$('.a37 .div').stop();
	});
});

/* Aula 38 - FAQ: Somar propriedades na animação */

$(function() {
	$('.a38 .botao').bind('click', function() {

		$('.a38 .div').animate({
			'margin-left': '+=50'
		}, 1000);

	});
});

/* Aula 42 - Método Auxiliares de Ajax */

$(function() {
	$('.a42')
});