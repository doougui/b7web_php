<?php
	require 'config.php';

	// $id = 0;

	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id = addslashes($_GET['id']);
	} else {
		header('Location: index.php');
	}

	if (isset($_POST['nome']) && !empty($_POST['nome']) || 
	isset($_POST['email']) && !empty($_POST['email'])) {

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
		$pdo -> query($sql);

		header('Location: index.php');
	}

	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$sql = $pdo -> query($sql);

	if ($sql -> rowCount() > 0) {
		$dado = $sql -> fetch();
	} else {
		header('Location: index.php');
	}

?>

<form method="POST">
	<label for="nome">Nome: </label><br>
	<input type="text" name="nome" id="nome" value="<?php echo $dado['nome']; ?>" autofocus><br><br>

	<label for="email">E-mail: </label><br>
	<input type="email" name="email" id="email" value="<?php echo $dado['email']; ?>"><br><br>

	<input type="submit" value="Atualizar">
</form>