<?php 

	$dsn = "mysql:dbname=projeto_mmn;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		global $pdo;
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Erro: ".$e -> getMessage();
		exit;
	}

	$limite = 3;
	$patentes = array();