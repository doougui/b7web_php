<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Calculadora Básica (Exercício)</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="POST">
		<input type="number" name="n1">
		<select name="operador" id="operador">
			<option value="sub">-</option>
			<option value="adi">+</option>
			<option value="mult">*</option>
			<option value="div">/</option>
		</select>
		<input type="number" name="n2">

		<input type="submit" value="Calcular">
	</form>
</body>
</html>

<?php 

	if (isset($_POST['n1']) && isset($_POST['operador']) && isset($_POST['n2'])) {
		if (!empty($_POST['n1']) && !empty($_POST['operador']) && !empty($_POST['n2'])) {

			$n1 = addslashes($_POST['n1']);
			$op = addslashes($_POST['operador']);
			$n2 = addslashes($_POST['n2']);

			str_replace(',', '.', $n1);
			str_replace(',', '.', $n2);

			header("Location: calc.php?n1=".$n1."&op=".$op."&n2=".$n2);
		} else {
			header("Location: index.php");
		}
	}

?>