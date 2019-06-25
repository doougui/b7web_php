<?php 
	session_start();

	$dsn = "mysql:dbname=classificados;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	global $pdo;
	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Falhou: ".$e -> getMessage();
		exit;
	}