<?php 
	$dsn = "mysql:dbname=acoes_modal;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	if (isset($_POST['id']) && !empty($_POST['id'])) {
		$id = addslashes($_POST['id']);

		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(':id', $id);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$info = $sql -> fetch();
			?>

			<?php
		}
	}
?>