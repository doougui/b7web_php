/* Aula 01 - Temporização */

function write() {
	document.write('Executou! <br>');
}

var interval = setInterval(write, 2000);
var timeout = setTimeout(write, 2000);
clearInterval(interval);
clearTimeout(timeout);

/*
   Aula 03 - Propriedades && 
	Aula 04 - Funções de Classe && 
	Aula 05 - Funções Auxiliares 
*/

function Animal() {
	this.raca = "Cão";
	this.nome = "Lulu";
	this.idade = 200;
	this.peso = 10;

	this.fazerXixi = function() {
		console.log('Xiiiiiiiii...');
	}

	this.comer = function(kg) {
		for (var i = 0; i < (kg * 5); i++) {
			this.mastigar(i);
		}	

		console.log('hmm...');
		this.peso += (kg / 2);
	}

	this.mastigar = function(i) {
		console.log(i + ' - Nhock...');
	}
}

var lulu = new Animal();
lulu.raca = "Gato";
lulu.nome = "Lulu";
lulu.comer(10);

var xuxu = new Animal();
xuxu.raca = "Cão";
xuxu.nome = "Xuxu";

console.log(lulu.nome, xuxu.nome);

/* Aula 07 - Funções Web Storage */

// Salva permanentemente 
if (typeof localStorage.nome == "undefined") {
	localStorage.nome = prompt("Digite o seu nome:");
}

document.getElementById("info").innerHTML = localStorage.nome;

// É excluido quando o navegador é fechado
if (typeof sessionStorage.idade == "undefined") {
	sessionStorage.idade = prompt("Digite a sua idade:");
}

document.getElementById("info2").innerHTML = sessionStorage.idade;