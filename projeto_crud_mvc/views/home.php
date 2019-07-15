<a href="<?= BASE_URL ?>contatos/add">Adicionar</a><br>
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>
	
	<?php foreach ($lista as $item): ?>
		<tr>
			<td><?= $item['id']?></td>
			<td><?= $item['nome']?></td>
			<td><?= $item['email']?></td>
			<td>
				<a href="<?= BASE_URL ?>">Editar</a>
				<a href="<?= BASE_URL ?>">Excluir</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>