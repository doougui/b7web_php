<?php 
	session_start();
	require 'config.php';

	unset($_SESSION['lg']);

	if (isset($_POST['email']) && !empty($_POST['email']) &&
		 isset($_POST['senha']) && !empty($_POST['senha']))
	{
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = MD5(:senha)";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(':email', $email);
		$sql -> bindValue(':senha', $senha);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$sql = $sql -> fetch();
			$id = $sql['id'];
			$ip = $_SERVER['REMOTE_ADDR'];

			$_SESSION['lg'] = $id;

			$sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(':ip', $ip);
			$sql -> bindValue(':id', $id);
			$sql -> execute();

			header('Location: index.php');
			exit;
		} 
	} 
?>

<h1>Login</h1>


<form method="POST">
	<label for="email">E-mail</label><br>
	<input type="email" id="email" name="email"><br><br>

	<label for="senha">Senha</label><br>
	<input type="password" id="senha" name="senha"><br><br>

	<input type="submit" value="Entrar">
</form>