<?php

$dsn = "mysql:dbname=projeto_esqueciasenha;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Error: ".$e -> getMessage();
	exit;
}