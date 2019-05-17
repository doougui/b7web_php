/* Aula 02 - Eventos de Mouse */

// function apertouMouse() {
// 	console.log('O USUÁRIO APERTOU!');
// }

// function soltouMouse() {
// 	console.log('O USUÁRIO SOLTOU!');
// }

// function mouseEmCima() {
// 	console.log('MOUSE PASSOU POR CIMA!')
// }

// function mouseSaiuDeCima() {
// 	console.log('MOUSE SAIU DE CIMA!');
// }

// function moveuMouse() {
// 	console.log('MOUSE FOI MOVIDO!');
// }

// function clicou() {
// 	console.log('CLICOU!');
// }

// function botaoDireito(event) {
// 	event.preventDefault();
// 	console.log('CLICOU COM O BOTÃO DIREITO!');
// }

// function doubleClick() {
// 	console.log('DEU UM CLIQUE DUPLO!');
// }


/* Aula 03 - Eventos de Teclado */

// function apertouAlgumaTecla() {
// 	console.log('APERTOU ALGUMA TECLA');
// }

// function apertouTecla(event) {
// 	console.log('APERTOU A TECLA: '+ event.keyCode);
// }

// function apertouShift(event) {
// 	if (event.shiftKey == true) {
// 		console.log('APERTOU ALGUMA TECLA COM SHIFT');
// 	}
// 	if (event.ctrlKey == true) {
// 		console.log('APERTOU ALGUMA TECLA COM CTRL');
// 	}
// 	if (event.altKey == true) {
// 		console.log('APERTOU ALGUMA TECLA COM ALT');
// 	}
// }

// function pressionouTecla(event) {
// 	console.log('PRESSIONOU A TECLA: '+ event.keyCode)
// }

/* Aula 04 - Eventos de Página */

// function carregou() {
// 	console.log('PÁGINA CARREGADA');
// }

/* Aula 05 - Eventos de Formulário */

// function mudouOpcao(objeto) {
// 	console.log('Selecionou: '+ objeto.value);
// }

// function focou() {
// 	console.log('Focou no campo.');
// }

// function desfocou() {
// 	console.log('Desfocou do campo.');
// }

/* Aula 07 - Manipulação de Data */

var date = new Date(); //Pega a data atual

console.log(date); //Data atual
console.log(date.getHours()) //Hora atual
console.log(date.getMinutes()) //Minuto atual
console.log(date.getSeconds()) //Segundo atual
console.log(date.getMilliseconds()) //Milisegundos atuais
console.log(date.getDate()) //Dia atual
console.log(date.getDay()) //Dia da semana atual
console.log(date.getMonth()) //Mês atual - 1 (pois começa do 0);
console.log(date.getMonth() + 1) //Mês atual normal
console.log(date.getFullYear()) //Ano atual
console.log(date.getTime()) //Quantidade total de milisegundos da data (desde 1970)
console.log(date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear()) //Data atual no padrão BR. É preciso adicionar + 1 no mês pois ele começa do 0, e não do 1.

var dias = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado']
console.log(dias[date.getDay()]); //Dia atual da semana escrito

console.log(date.setDate(date.getDate() + 60)) //Dia atual + 60 dias

var dateMS = new Date(0); //Pega a data em milisegundos na data inicial (1970)

console.log(dateMS);

var dateConfig = new Date(Date.parse("March 10, 2018")) //Data setada pelo programador (ou pelo usuário)

console.log(dateConfig);