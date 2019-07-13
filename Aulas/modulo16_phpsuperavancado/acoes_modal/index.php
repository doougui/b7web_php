<?php 
	$dsn = "mysql:dbname=acoes_modal;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	$sql = "SELECT * FROM usuarios";
	$sql = $pdo -> query($sql);

	if ($sql -> rowCount() > 0) {
		$usuarios = $sql -> fetchAll();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Projeto: Ações em Modal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Usuários</h1>
	
	<table border="1" width="500">
		<?php foreach ($usuarios as $usuario): ?>
			<tr 
			data-nome="<?= $usuario['nome'] ?>" 
			data-email="<?= $usuario['email'] ?>" 
			data-senha="<?= $usuario['senha'] ?>" 
			data-id="<?= $usuario['id'] ?>">
				<td><?= $usuario['nome'] ?></td>
				<td><?= $usuario['email'] ?></td>
				<td><?= $usuario['senha'] ?></td>
				<td>
					<a href="javascript:;" onclick="editar(this)">Editar</a>
					<a href="javascript:;" onclick="excluir('<?= $usuario['id'] ?>')">Excluir</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>

	<div id="modal-editar" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form method="POST">
						<input type="hidden" name="id" id="id">

						<label for="nome">Nome:</label><br>
						<input type="text" name="nome" id="nome"><br><br>

						<label for="email">Email:</label><br>
						<input type="email" name="email" id="email"><br><br>

						<label for="senha">Senha:</label><br>
						<input type="text" name="senha" id="senha"><br><br>

						<input type="submit" value="Salvar">
					</form>
				</div>
			</div>
		</div>
	</div>
 
	<div id="modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">...</div>
			</div>
		</div>
	</div>

	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="script.js"></script>
</body>
</html>