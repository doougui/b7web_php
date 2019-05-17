<form method="POST">
	<input type="text" name="nome">
	<input type="submit" value="Enviar">
</form>

<?php
	if (isset($_POST['nome'])) {
		$nome = $_POST['nome'];
		$pularNome = ($nome."\n");
		file_put_contents('nomes.txt', $pularNome, FILE_APPEND);

		header("Location: antif5.php");
	}
?>