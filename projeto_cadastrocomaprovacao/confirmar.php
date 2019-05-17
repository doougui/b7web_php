<?php 

require "config.php";

$h = $_GET['h'];

if (!empty($h))

	$pdo -> query("UPDATE usuarios SET status = 1 WHERE MD5(id) = '$h'");

	echo "Cadastro confirmado com sucesso!";

?>