<?php 
	session_start();
	unset($_SESSION['lAjax']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Login em AJAX</title>
	<meta charset="UTF-8">
</head>
<body>
	<form id="form" method="POST">
		E-mail:<br>
		<input id="email" type="email" name="email"><br><br>

		Senha:<br>
		<input id="password" type="password" name="password"><br><br>

		<input type="submit" value="Entrar">
	</form>

	<script src="jquery-3.4.1.min.js"></script>
	<script src="script.js"></script>
</body>
</html>