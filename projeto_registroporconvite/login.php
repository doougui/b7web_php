<?php
	session_start();

	require "config.php";
	$_SESSION['id'] = 0;

	if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql = $pdo -> query($sql);

		if ($sql -> rowCount() > 0) {
			$dado = $sql -> fetch();
			$_SESSION['id'] = $dado['id'];

			header("Location: index.php");
		} else {
			header("Location: login.php?error=wronginfos");
		}
	}
?>

<form method="POST">
	E-mail: <br/>
	<input type="email" name="email" required><br/><br/>

	Senha	<br/>
	<input type="password" name="senha" required><br/><br/>
	
	<?php

	if (isset($_GET['error']) && $_GET['error'] == 'wronginfos') {
		echo "Email ou senha incorretos.<br/><br/>";
	}

	?>
	<input type="submit" value="Entrar">	
	<a href="register.php">Você precisa de um link de convite para se cadastrar.</a>
</form>