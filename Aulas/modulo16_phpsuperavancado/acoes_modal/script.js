function editar(obj) {
		
	var tr = $(obj).closest('tr');

	var id = tr.attr('data-id');
	var nome = tr.attr('data-nome');
	var email = tr.attr('data-email');
	var senha = tr.attr('data-senha');

	$('#modal-editar').find('.modal-body').find('#id').val(id);
	$('#modal-editar').find('.modal-body').find('#nome').val(nome);
	$('#modal-editar').find('.modal-body').find('#email').val(email);
	$('#modal-editar').find('.modal-body').find('#senha').val(senha);

	$('#modal-editar').find('.modal-body').find('form').on('submit', salvar);

	$('#modal-editar').modal('show');
}

function salvar(e) {
	e.preventDefault();

	var id = $(this).find('#id').val();
	var nome = $(this).find('#nome').val();
	var email = $(this).find('#email').val();
	var senha = $(this).find('#senha').val();

	$.ajax({
		url: 'salvar.php',
		type: 'POST',
		data: {
			id: id,
			nome: nome,
			email: email,
			senha: senha
		},
		success: function() {
			alert('Dados alterados com sucesso!');
			window.location.href = window.location.href;
		}
	});
};


function excluir(id) {
	$('#modal').find('.modal-body').html('Tem certeza que deseja excluir o id '+ id +'?<br><button onclick="excluirUsuario('+ id +')">Sim</button><button onclick="fechar()">Não</button>');
	$('#modal').modal('show');
}

function excluirUsuario(id) {
	$.ajax({
		url: 'excluir.php',
		type: 'POST',
		data: {id: id},
		success: function() {
			alert('Usuário excluido com sucesso!');
			window.location.href = window.location.href;
		}
	});
}

function fechar() {
	$('#modal').modal('hide');
}