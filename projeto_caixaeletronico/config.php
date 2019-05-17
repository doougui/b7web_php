<?php
	$dsn = "mysql:dbname=projeto_caixaeletronico;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	
	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (Exception $e) {
		echo "Erro: ".$e -> getMessage();
	}

?>