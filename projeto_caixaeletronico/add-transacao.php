<?php
	session_start();
	require "config.php";

	if (isset($_POST['tipo'])) {
		$tipo = $_POST['tipo'];
		$valor = addslashes(str_replace(',', '.', $_POST['valor']));
		$valor = floatval($valor);

		$sql = $pdo -> prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
		$sql -> bindValue(":id_conta", $_SESSION['id']);
		$sql -> bindValue(":tipo", $tipo);
		$sql -> bindValue(":valor", $valor);
		$sql -> execute();

		if ($tipo == 0) {
			$sql = $pdo -> prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
			$sql -> bindValue(":valor", $valor);
			$sql -> bindValue(":id", $_SESSION['id']);
			$sql -> execute();
		} else {
			$sql = $pdo -> prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
			$sql -> bindValue(":valor", $valor);
			$sql -> bindValue(":id", $_SESSION['id']);
			$sql -> execute();
		}

		header("Location: index.php");
		exit;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caixa Eletrônico</title>
</head>
<body>
	<form method="POST">
		Tipo de transação:<br/>

		<select name="tipo">
			<option value="0">Depósito</option>
			<option value="1">Retirada</option>
		</select><br/><br/>

		Valor:<br/>
		<input type="text" name="valor"><br/><br/>

		<input type="submit" value="Adicionar" pattern="[0-9.,]{1,}">
	</form>
</body>
</html>