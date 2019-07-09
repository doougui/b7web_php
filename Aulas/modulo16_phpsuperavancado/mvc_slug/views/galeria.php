<p>Galeria de fotos!</p>

<ul>
	<?php foreach ($albuns as $album): ?>
		<li><a href="<?= BASE_URL ?>galeria/abrir/<?= $album['slug'] ?>"><?= utf8_encode($album['titulo']) ?></a></li>
	<?php endforeach; ?>
</ul>

