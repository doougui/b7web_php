<?php 
	session_start();
	require "config.php";

	if (!empty($_POST['nome']) && !empty($_POST['email'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5($email);
		$id_pai = $_SESSION['mmnlogin'];

		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(":email", $email);
		$sql -> execute();

		if ($sql -> rowCount() == 0) {
			$sql = "INSERT INTO usuarios (id_pai, nome, email, senha) VALUES (:id_pai, :nome, :email, :senha)";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(":id_pai", $id_pai);
			$sql -> bindValue(":nome", $nome);
			$sql -> bindValue(":email", $email);
			$sql -> bindValue(":senha", $senha);
			$sql -> execute();

			header("Location: index.php");
			exit;
		} else {
			echo "Usuário já cadastrado.";
		}
	}
?>

<h1>Cadastrar Novo Usuário.</h1>

<form method="POST">
	<label for="nome">Nome</label><br>
	<input type="text" id="nome" name="nome"><br><br>

	<label for="email">E-mail</label><br>
	<input type="email" id="email" name="email"><br><br>

	<input type="submit" value="Cadastrar">
</form>