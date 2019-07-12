<table border="0" width="300">
		<?php foreach ($lista as $item): ?>
			<tr>
				<td><?= $item['id'] ?></td>
				<td><?= $item['title'] ?></td>
			</tr>
		<?php endforeach; ?>
</table>

<?php if ($paginaAtual > 1): ?>
	<a href="<?= BASE_URL?>?p=<?= $paginaAtual - 1 ?>">Anterior</a>
<?php endif; ?>

<?php for ($q = 1; $q <= $paginas; $q++): ?>
	<?php if ($paginaAtual == $q): ?>
		<a href="<?= BASE_URL?>?p=<?= $q ?>"><strong><?= $q ?></strong></a>
	<?php else: ?>
		<a href="<?= BASE_URL?>?p=<?= $q ?>"><?= $q ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if ($paginaAtual < $paginas): ?>
	<a href="<?= BASE_URL?>?p=<?= $paginaAtual + 1 ?>">Próxima</a>
<?php endif; ?>