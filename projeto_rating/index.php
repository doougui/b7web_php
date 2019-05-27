<?php 

	require 'config.php';

	$sql = "SELECT * FROM filmes";
	$sql = $pdo -> query($sql);

	if ($sql -> rowCount() > 0) {
		foreach ($sql -> fetchAll() as $filme): ?>
			<fieldset>
				<strong><?= $filme['titulo'] ?></strong><br>
				<a href="votar.php?id=<?= $filme['id'] ?>&voto=1"><img src="star.png" height="20" alt="Estrela"></a>
				<a href="votar.php?id=<?= $filme['id'] ?>&voto=2"><img src="star.png" height="20" alt="Estrela"></a>
				<a href="votar.php?id=<?= $filme['id'] ?>&voto=3"><img src="star.png" height="20" alt="Estrela"></a>
				<a href="votar.php?id=<?= $filme['id'] ?>&voto=4"><img src="star.png" height="20" alt="Estrela"></a>
				<a href="votar.php?id=<?= $filme['id'] ?>&voto=5"><img src="star.png" height="20" alt="Estrela"></a>
				( <?= $filme['media'] ?> )
			</fieldset>
		<?php endforeach;
	} else {
		echo "<p>Não há filmes cadastrados!</p>";
	}
	