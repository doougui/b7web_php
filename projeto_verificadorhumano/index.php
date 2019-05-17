<?php
	session_start();

	$n1 = rand(0, 10);
	$n2 = rand(0, 10);
	$_SESSION['r'] = $n1 + $n2;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Projeto: Verificador de Humano (Exercício)</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Verificador de Humanos</h1>
	<form action="verificador.php" method="POST">
		<?php
			echo $n1." + ".$n2." = ";
		?>
		<input type="number" name="resultado">
		<button type="submit">Verificar</button>
	</form>
</body>
</html>
