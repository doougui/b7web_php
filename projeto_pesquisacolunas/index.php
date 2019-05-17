<?php 

?>

<h1>Digite o email ou cpf do usuário</h1>

<form method="GET">
	<input type="text" name="campo">
	<input type="submit" value="Pesquisar">
</form>

<hr>

<?php 

if (!empty($_GET['campo'])) {
	$campo = addslashes($_GET['campo']);

	try {
		$pdo = new PDO("mysql:dbname=projeto_pesquisacolunas;host=127.0.0.1", "root", "");
	} catch (PDOException $e) {
		echo "Erro: ".$e -> getMessage();
		exit;
	}

	$sql = "SELECT * FROM users WHERE (email = :email) OR (cpf = :cpf) OR (nome = :nome)";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(":email", $campo);
	$sql -> bindValue(":cpf", $campo);
	$sql -> bindValue(":nome", $campo);
	$sql -> execute();

	if ($sql -> rowCount() > 0) {
		$sql = $sql -> fetch();
		echo "Nome: ".$sql['nome'];
	} else {
		echo "Nenhum usuário encontrado!";
	}
}

?>