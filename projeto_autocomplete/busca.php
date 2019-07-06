<?php 
	$dsn = "mysql:dbname=projeto_autocomplete;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	
	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	$array = array();

	if (isset($_POST['texto']) && !empty($_POST['texto'])) {
		$texto = addslashes($_POST['texto']);

		$sql = "SELECT * FROM pessoas WHERE nome LIKE :texto";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(':texto', '%'.$texto.'%');
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			foreach ($sql -> fetchAll() as $pessoa) {
				$array[] = array('id' => $pessoa['id'], 'nome' => utf8_encode($pessoa['nome']));
				// echo utf8_encode($pessoa['nome']).'<br>';
			}
		}
	}

	echo json_encode($array);