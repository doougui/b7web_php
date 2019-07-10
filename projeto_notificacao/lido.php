<?php 
	$dsn = "mysql:dbname=projeto_notificacao;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	$id = addslashes($_GET['id']);

	$sql = "UPDATE notificacoes SET lido = 1 WHERE id = :id";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(':id', $id);
	$sql -> execute();