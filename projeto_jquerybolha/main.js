function addBola() {
	// Pega o tamanho da tela do usuário
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	// Gera uma posição aleatória para a bola de acordo com o tamanho da tela
	var x = Math.floor(Math.random() * (windowWidth - 100));
	var y = Math.floor(Math.random() * (windowHeight - 50));

	// Gera uma cor aleatória para a bola
	function getRandomColor() {
		var letras = "0123456789ABCDEF";
		var color = "#";
		for (var i = 0; i < 6; i++) {
			color += letras[Math.floor(Math.random() * 16)];
		}

		return color;
	}

	var bola = $('<div class="bola"></div>');
	// Coloca a bola na tela na posição x e y
	bola.css('left', x + 'px');
	bola.css('top', y + 'px');
	// Coloca uma cor aleatória na bola
	bola.css('background-color', getRandomColor());

	bola.bind('click', function() {
		// Faz a bola desaparecer
		$(this).fadeOut('fast');

		// Adiciona +1 no placar
		placar++;
		updatePlacar();
	});

	// Coloca a bola na tela
	$(document.body).append(bola);
}

// Da um update no valor do placar
function updatePlacar() {
	$('#placar').html(placar);
}

// Valor inicial do placar
var placar = 0;

// Assim que a página for carregada
$(document).ready(function() {
	// Começar jogo
	$('#comecar').bind('click', function() {
		// Adiciona uma bola a cada 1 seg
		setInterval(addBola, 1000);
		// Faz o botão desaparecer
		$(this).fadeOut('fast');

		// Diminui o height do placar 
		setTimeout(diminuirPlacar, 200);

		function diminuirPlacar() {
			$('.placar').animate({
				height: 80
			}, 300);
		}
	});
});