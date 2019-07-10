<?php 	
	$dsn = "mysql:dbname=projeto_notificacao;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	$prop = array(
		'curtidor' => 2,
		'id_foto' => 123
	);

	$sql = "INSERT INTO notificacoes 
											(id_user, notificacao_tipo, propriedades, link) 
											VALUES 
											(:id_user, :tipo, :prop, :link)";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(':id_user', '1');
	$sql -> bindValue(':tipo', 'CURTIDA');
	$sql -> bindValue(':prop', json_encode($prop));
	$sql -> bindValue(':link', 'http://localhost/galeria/abrir/123');
	$sql -> execute();