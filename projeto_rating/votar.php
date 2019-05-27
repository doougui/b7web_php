<?php 

	require 'config.php';

	if (isset($_GET['id']) && !empty($_GET['id']) &&
		 isset($_GET['voto']) && !empty($_GET['voto']))
	{
		$id = intval(addslashes($_GET['id']));
		$voto = intval(addslashes($_GET['voto']));

		if ($voto >= 1 && $voto <= 5) {
			$sql = "INSERT INTO votos SET id_filme = :id_filme, nota = :nota";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(':id_filme', $id);
			$sql -> bindValue(':nota', $voto);
			$sql -> execute();

			$sql = "UPDATE filmes SET media = 
					  		(select AVG(nota) from votos where votos.id_filme = filmes.id)
					 WHERE id = :id";
			$sql = $pdo -> prepare($sql);
			$sql -> bindValue(':id', $id);
			$sql -> execute();

			header("Location: index.php");
			exit;
		}
	} 