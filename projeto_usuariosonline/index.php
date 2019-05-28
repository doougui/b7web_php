<?php 
		
	date_default_timezone_set('America/Sao_Paulo');

	try {
		$pdo = new PDO('mysql:dbname=projeto_usuariosonline;host=127.0.0.1', 'root', '');
	} catch (PDOException $e) {
		echo "Erro: ".$e -> getMessage();
	}

	$ip = $_SERVER['REMOTE_ADDR'];
	$hora = date('H:i:s');

	$sql = "INSERT INTO acessos (ip, hora) VALUES (:ip, :hora)";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(':ip', $ip);
	$sql -> bindValue(':hora', $hora);
	$sql -> execute();

	$sql = "DELETE FROM acessos WHERE hora < :hora";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(':hora', date('H:i:s', strtotime('-5 minutes')));
	$sql -> execute();

	$sql = "SELECT * FROM acessos WHERE hora > :hora GROUP BY ip";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(':hora', date('H:i:s', strtotime('-5 minutes')));
	$sql -> execute();

	$contagem = $sql -> rowCount();

	echo "ONLINE: ".$contagem;

?>
