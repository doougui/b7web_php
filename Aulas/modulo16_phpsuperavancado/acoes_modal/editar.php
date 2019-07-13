<?php 
	$dsn = "mysql:dbname=acoes_modal;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	if (isset($_POST['id']) && !empty($_POST['id'])) {
		$id = addslashes($_POST['id']);

		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(':id', $id);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$info = $sql -> fetch();
			?>
				<form method="POST">
					<input type="hidden" name="id" id="id" value="<?= $info['id'] ?>">

					<label for="nome">Nome:</label><br>
					<input type="text" name="nome" id="nome" value="<?= $info['nome'] ?>"><br><br>

					<label for="email">Email:</label><br>
					<input type="email" name="email" id="email" value="<?= $info['email'] ?>"><br><br>

					<label for="senha">Senha:</label><br>
					<input type="text" name="senha" id="senha" value="<?= $info['senha'] ?>"><br><br>

					<input type="submit" value="Salvar">
				</form>
			<?php
		}
	}
?>