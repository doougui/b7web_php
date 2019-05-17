<?php

$dsn = "mysql:dbname=projeto_registroporconvite;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Erro: ".$e -> getMessage();
}

?>