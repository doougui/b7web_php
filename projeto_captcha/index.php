<?php 

session_start();

if (!isset($_SESSION['captcha'])) {
	$n = rand(1000, 9999);

	$_SESSION['captcha'] = $n;
}

if (!empty($_POST['codigo'])) {
	$c = $_POST['codigo'];

	if ($c == $_SESSION['captcha']) {
		echo "Acertou!";
	} else {
		echo "Errou!";
	}

	$n = rand(1000, 9999);
	$_SESSION['captcha'] = $n;
}

?>

<form method="POST">
	E-mail:<br>
	<input type="email" name="email"><br><br>

	Senha:<br>
	<input type="password" name="senha"><br><br>

	<img src="imagem.php" width="100" height="50"><br><br>

	<input type="text" name="codigo"><br><br>
	<input type="submit" value="Entrar">
</form>