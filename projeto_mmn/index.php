<?php 

	session_start();
	require "config.php";
	require "funcoes.php";

	if (empty($_SESSION["mmnlogin"])) {
		header("Location: login.php");
		exit;
	}
	
	$id = $_SESSION["mmnlogin"];

	$sql = "SELECT nome FROM usuarios WHERE id = :id";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(":id", $id);
	$sql -> execute();

	if ($sql -> rowCount() > 0) {
		$sql = $sql -> fetch();
		$nome = $sql["nome"];
	} else {
		header("Location: login.php");
		exit;
	}

	$lista = listar($id, $limite);
?>

<h1>Sistema de Marketing Multin�vel</h1>
<h2>Bem vindo, <?= $nome ?>.</h2>

<a href="cadastro.php">Cadastrar novo usu�rio!</a><br>
<a href="sair.php">Sair</a>

<hr>

<h4>Lista de cadastros</h4>

<?php exibir($lista); ?>