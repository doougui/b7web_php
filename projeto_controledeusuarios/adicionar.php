<?php
	require 'config.php';

	if (isset($_POST['nome']) && !empty($_POST['nome']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['senha']) && !empty($_POST['senha'])) {

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
		$pdo -> query($sql);

		header("Location: index.php");
	}

?>

<form method="POST">
	<label for="nome">Nome: </label><br>
	<input type="text" name="nome" id="nome" autofocus><br><br>

	<label for="email">E-mail: </label><br>
	<input type="email" name="email" id="email"><br><br>

	<label for="senha">Senha: </label><br>
	<input type="password" name="senha" id="senha"><br><br>

	<input type="submit" value="Cadastrar">
</form>