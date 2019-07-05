<?php 
	$dsn = "mysql:dbname=multitenancy;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (Exception $e) {
		die('Falhou: '.$e -> getMessage());
	}

	$dominio = $_SERVER['HTTP_HOST'];
	echo "Dominio: ".$dominio.'<br>';

	$sql = "SELECT * FROM usuarios WHERE dominio = ?";
	$sql = $pdo -> prepare($sql);
	$sql -> execute(array($dominio));

	if ($sql -> rowCount() > 0) {
		$cliente = $sql -> fetch();

		if (file_exists('clientes/'.$cliente['id'].'/index.php')) {
			require 'clientes/'.$cliente['id'].'/index.php';
		} else {
			echo "Sistema fora do ar!";
		}
	} else {
		echo "Sistema fora do ar!";
	}