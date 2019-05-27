<?php 

	$dsn = "mysql:dbname=projeto_loginunico;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Erro: ".$e -> getMessage();
		exit;
	}
?>