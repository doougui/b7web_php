<?php
	require 'config.php';
?>
<style>
	.row {
		text-align: center;
	}
</style>


<a href="adicionar.php">Adicionar novo usuário.</a>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	<?php
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo -> query($sql);

		if ($sql -> rowCount() > 0) {
			foreach ($sql -> fetchAll() as $usuario) {
				echo "<tr>";
				echo "<td class='row'>".$usuario['nome']."</td>";
				echo "<td class='row'>".$usuario['email']."</td>";
				echo "<td class='row'><a href='editar.php?id=".$usuario['id']."'>Editar</a> - <a href='excluir.php?id=".$usuario['id']."'>Excluir</a></td>";
				echo "</tr>";
			}
		} else {
			echo "Algo deu errado!";
		}

	?>
</table>