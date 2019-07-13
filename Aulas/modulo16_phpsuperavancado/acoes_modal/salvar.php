<?php 
	$dsn = "mysql:dbname=acoes_modal;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	if (isset($_POST['id']) && !empty($_POST['id']) &&
			isset($_POST['nome']) && !empty($_POST['nome']) &&
			isset($_POST['email']) && !empty($_POST['email']) &&
			isset($_POST['senha']) && !empty($_POST['senha'])) 
	{
		$id = addslashes($_POST['id']);
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(':nome', $nome);
		$sql -> bindValue(':email', $email);
		$sql -> bindValue(':senha', $senha);
		$sql -> bindValue(':id', $id);
		$sql -> execute();
	}