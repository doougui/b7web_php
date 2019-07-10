<?php 
	$dsn = "mysql:dbname=projeto_notificacao;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	$sql = "SELECT * FROM notificacoes WHERE id_user = 1 AND lido = 0";
	$sql = $pdo -> query($sql);

	$array = array('qt' => 0);

	if ($sql -> rowCount() > 0) {
		$array['qt'] = $sql -> rowCount();
	}

	echo json_encode($array);
	exit;