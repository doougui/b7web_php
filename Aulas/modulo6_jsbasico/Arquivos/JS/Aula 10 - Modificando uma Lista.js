function adicionarIngrediente() {
	var ing = document.getElementById('ingrediente');
	var listahtml = document.getElementById('lista').innerHTML;

	listahtml = listahtml + "<li>"+ ing.value + "</li>";

	document.getElementById('lista').innerHTML = listahtml;

	ing.value = '';
}