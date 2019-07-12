<table border="0" width="300">
		<?php foreach ($lista as $item): ?>
			<tr>
				<td><?= $item['id'] ?></td>
				<td><?= $item['title'] ?></td>
			</tr>
		<?php endforeach; ?>
</table>

<?php for ($q = 1; $q <= $paginas; $q++): ?>
	<?php if ($paginaAtual == $q): ?>
		<a href="<?= BASE_URL?>?p=<?= $q ?>"><strong><?= $q ?></strong></a>
	<?php else: ?>
		<a href="<?= BASE_URL?>?p=<?= $q ?>"><?= $q ?></a>
	<?php endif; ?>
<?php endfor; ?>