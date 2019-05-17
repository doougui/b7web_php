<meta charset="utf-8">

<?php 

$dsn = "mysql:dbname=projeto_ordenar;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Erro: ".$e -> getMessage();
	exit;
}

if (isset($_GET['order']) && !empty($_GET['order'])) {
	$order = addslashes($_GET['order']);

	$sql = "SELECT * FROM usuarios ORDER BY ".$order;
} else {
	$order = "";
	$sql = "SELECT * FROM usuarios";
}
?>

<form method="GET">
	<select name="order" onchange="this.form.submit()">
		<option></option>
		<option value="nome" <?php echo ($order == "nome") ? 'selected="selected"' : ''; ?>>Pelo nome</option>
		<option value="idade" <?php echo ($order == "idade") ? 'selected="selected"' : ''; ?>>Pela idade</option>
	</select>
</form>

<table border="1" width="400">
	<tr>
		<td>Nome</td>
		<td>Idade</td>
	</tr>

	<?php

	$sql = $pdo -> query($sql);

	if ($sql -> rowCount() > 0) {
		foreach ($sql -> fetchAll() as $usuario) {
			?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['idade']; ?></td>
			</tr>

			<?php
		}
	}

	?>
</table>