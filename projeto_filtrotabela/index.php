<?php 
	try {
		$pdo = new PDO("mysql:dbname=projeto_filtrotabela;host=127.0.0.1", "root", "");
	} catch (PDOException $e) {
		echo "Erro: ".$e -> getMessage();
	}

	if (isset($_POST['sexo']) && $_POST['sexo'] != '') {
		$sexo = addslashes($_POST['sexo']);
		$sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(":sexo", $sexo);
		$sql -> execute();
	} else {
		$sexo = '';
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo -> query($sql);
	}
?>

<form method="POST">
	<select name="sexo" onchange="this.form.submit()">
		<option></option>
		<option value="0" <?= ($sexo == '0') ? "selected='selected'" : "" ?>>Masculino</option>
		<option value="1" <?= ($sexo == '1') ? "selected='selected'" : "" ?>>Feminino</option>
	</select>
</form>

<table border="1" width="100%">
	<tr>
		<th>Nome</th>
		<th>Sexo</th>
		<th>Idade</th>
	</tr>

	<?php 

	$sexos = array(
		'0' => 'Masculino', 
		'1' => 'Feminino');

	if ($sql -> rowCount() > 0) {
		foreach ($sql -> fetchAll() as $usuario):
			?>
			
			<tr>
				<td><?= $usuario['nome'] ?></td>
				<td><?= $sexos[$usuario['sexo']] ?></td>
				<td><?= $usuario['idade'] ?></td>
			</tr>

			<?php
		endforeach;
	}

	?>
</table>