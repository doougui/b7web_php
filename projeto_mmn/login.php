<?php 
	session_start();
	require "config.php";

	if (!empty($_POST["email"]) && !empty($_POST["senha"])) {
		$email = addslashes($_POST["email"]);
		$senha = md5(addslashes($_POST["senha"]));

		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(":email", $email);
		$sql -> bindValue(":senha", $senha);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$sql = $sql -> fetch();

			$_SESSION["mmnlogin"] = $sql["id"];

			header("Location: index.php");
		} else {
			echo "Usuário e/ou senha inválidos.";
		}
	}	
?>

<form method="POST">
	<label for="email">E-mail</label><br>
	<input type="email" id="email" name="email"><br><br>

	<label for="senha">Senha</label><br>
	<input type="password" id="senha" name="senha"><br><br>

	<input type="submit" value="Entrar">
</form>