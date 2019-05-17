<?php 

$dsn = "mysql:dbname=projeto_multilinguagem;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	global $pdo;
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Error: ".$e -> getMessage();
}