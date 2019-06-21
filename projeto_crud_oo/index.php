<?php 
include 'contato.class.php';
$contato = new Contato();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD Orientados a Objetos</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<h1>Contatos</h1>

	<a href="adicionar.php" class="modal-ajax">Adicionar</a><br/><br/>

	<table border="1" width="600px">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>
		</tr>

		<?php
			$lista = $contato -> getAll();
			foreach ($lista as $item):
			?>
			<tr>
				<td><?php echo $item['id'];?></td>
				<td><?php echo $item['nome'];?></td>
				<td><?php echo $item['email'];?></td>
				<td>
					<a href="editar.php?id=<?php echo $item['id']; ?>" class="modal-ajax">Editar</a>
					<a href="excluir.php?id=<?= $item['id']; ?>">Excluir</a>
				</td>
			</tr>
			<?php endforeach; ?>
	</table>

	<div class="modal-bg">
		<div class="modal">
			
		</div>
	</div>

	<!-- JavaScript -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>