<?php 
	session_start();

	$dsn = "mysql:dbname=projeto_loginajax;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (Exception $e) {
		die('Erro: '.$e -> getMessage());
	}

	if (isset($_POST['email']) && !empty($_POST['email']) && 
			isset($_POST['senha']) && !empty($_POST['senha']))
	{	
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(':email', $email);
		$sql -> bindValue(':senha', md5($senha));
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$data = $sql -> fetch();
			$_SESSION['user'] = $data;

			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo "Preencha todos os campos.";
	}