<?php
	session_start();

	require "config.php";
	$_SESSION['id'] = 0;

	if (!empty($_GET['codigo'])) {
		$codigo = addslashes($_GET['codigo']);

		$sql = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND registros < 5";
		$sql = $pdo -> query($sql);

		if ($sql -> rowCount() == 0) {
			header("Location: login.php");
		}

	} else {
		header("Location: login.php");
	}

	if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$sql = $pdo -> query($sql);

		if ($sql -> rowCount() == 0) {

			$sql = "UPDATE usuarios SET registros = registros + 1 WHERE codigo = '$codigo'";
			$pdo -> query($sql);

			$codigo = md5(rand(0, 99999999).rand(0, 99999999));
			$sql = "INSERT INTO usuarios (email, senha, codigo) VALUES ('$email', '$senha', '$codigo')";
			$pdo -> query($sql);

			$sql = $pdo -> query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

			$dado = $sql -> fetch();
			$_SESSION['id'] = $dado['id'];

			header("Location: index.php");
		}
	}
?>

<h1>Cadastrar</h1>

<form method="POST">
	E-mail: <br/>
	<input type="email" name="email" required><br/><br/>

	Senha	<br/>
	<input type="password" name="senha" required><br/><br/>
	
	<?php

	if (isset($_GET['error']) && $_GET['error'] == 'emailunavailable') {
		echo "Email já existente.<br/><br/>";
	}

	?>
	<input type="submit" value="Cadastrar">	
	<a href="login.php">Entrar</a>
</form>