function editar(id) {
	
	$.ajax({
		url: 'editar.php',
		type: 'POST',
		data: {id:id},
		beforeSend: function() {
			$('#modal').find('.modal-body').html('Carregando...');
			$('#modal').modal('show');
		},
		success: function(html) {
			$('#modal').find('.modal-body').html(html);
			$('#modal').find('.modal-body').find('form').on('submit', salvar);
		}
	});
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