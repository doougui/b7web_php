<?php 
require "config.php";
?>

<h1>Lista de Usu�rios</h1>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>A��es</th>
	</tr>
	<?php 
	$sql = "SELECT * FROM usuarios WHERE status = 1";
	$sql = $pdo -> query($sql);

	if ($sql -> rowCount() > 0) {
		foreach ($sql -> fetchAll() as $usuario):
			?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><a href="excluir.php?id=<?php echo $usuario['id']; ?>">Excluir</a></td>
			</tr>
			<?php 
		endforeach;
	}
	?>
</table>