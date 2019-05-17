<?php 
include 'contato.class.php';
$contato = new Contato();

?>

<h1>Contatos</h1>

<a href="adicionar.php">Adicionar</a><br/><br/>

<table border="1" width="600px">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>A��es</th>
	</tr>

	<?php
		$lista = $contato -> getAll();
		foreach ($lista as $item):
		?>
		<tr>
			<td><?php echo $item['id'];?></td>
			<td><?php echo $item['nome'];?></td>
			<td><?php echo $item['email'];?></td>
			<td>
				<a href="editar.php?id=<?php echo $item['id']; ?>">Editar</a>
				<a href="excluir.php?id=<?= $item['id']; ?>">Excluir</a>
			</td>
		</tr>
		<?php endforeach; ?>
	
</table>