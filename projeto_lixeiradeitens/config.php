<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_lixeiradeitens;host=127.0.0.1", "root", "");
} catch (PDOException $e) {
	echo "Erro: ".$e -> getMessage();
	exit;
}