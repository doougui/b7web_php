<?php
	session_start();
	require "config.php";

	if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
		$id = $_SESSION['id'];

		$sql = $pdo -> prepare("SELECT * FROM contas WHERE id = :id");
		$sql -> bindValue(":id", $id);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			$info = $sql -> fetch();
		} else {
			header("Location: login.php");
			exit;
		}

	} else {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caixa Eletrônico</title>

	<style>
		table {
			width: 400px;
			border-collapse: collapse;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Banco XYZ</h1>
	<p>Titular:<?php echo $info['titular']; ?><br/>
	Agência: <?php echo $info['agencia']; ?><br/>
	Conta: <?php echo $info['conta']; ?><br/>
	Saldo: R$<?php echo $info['saldo']; ?></p>
	<a href="sair.php">Sair</a>

	<hr/>

	<h3>Movimentação / Extrato</h3>

	<a href="add-transacao.php">Adicionar transação</a><br/><br/>

	<table border="1">
		<tr>
			<td>Data</td>
			<td>Valor</td>
		</tr>		
		<?php
			$sql = $pdo -> prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
			$sql -> bindValue(":id_conta", $id);
			$sql -> execute();

			if ($sql -> rowCount() > 0) {
				foreach ($sql -> fetchAll() as $item) {
					?>
					<tr>
						<td><?php echo date("d/m/Y H:i", strtotime($item['data_operacao'])); ?></td>
						<td>
							<?php if ($item['tipo'] == '0'): ?>
								<span style="color: green;">+ R$ <?php echo $item['valor']; ?></span>
							<?php else: ?>
								<span style="color: red;">- R$ <?php echo $item['valor']; ?></span>
							<?php endif ?>
						</td>
					</tr>
					<?php
				}
			}
		?>

	</table>
</body>
</html>