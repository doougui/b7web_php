<?php 

try {
	$pdo = new PDO("mysql:dbname=projeto_reservas;host=127.0.0.1", "root", "");
} catch (PDOException $e) {
	echo "Erro: ".$e -> getMessage();
	exit;
}