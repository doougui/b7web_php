<?php
$dsn = "mysql:dbname=projeto_comentarios;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Erro: ".$e -> getMessage();
	exit;
}

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome = addslashes(($_POST['nome']));
	$mensagem = addslashes(($_POST['mensagem']));

	$sql = $pdo -> prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
	$sql -> bindValue(":nome", $nome);
	$sql -> bindValue(":msg", $mensagem);
	$sql -> execute();
}

?>

<fieldset>
	<form method="POST">
		Nome: <br/>
		<input type="text" name="nome"/><br/><br/>

		Mensagem: <br/>
		<textarea name="mensagem"></textarea><br/><br/>

		<input type="submit" value="Enviar mensagem">
	</form>
</fieldset>
<br/><br/>

<?php
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo -> query($sql);

if ($sql -> rowCount() > 0) {
	foreach ($sql -> fetchAll() as $mensagem) {
		?>
			<strong><?php echo $mensagem['nome']; ?></strong><br/>
			<p><?php echo $mensagem['msg']; ?></p>
			<hr/>
		<?php
	}
} else {
	echo "Não há mensagens!";
}
?>

