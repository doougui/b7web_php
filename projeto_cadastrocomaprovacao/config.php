<?php

$dsn = "mysql:dbname=projeto_cadastrocomaprovacao;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	die($e -> getMessage());
}

?>