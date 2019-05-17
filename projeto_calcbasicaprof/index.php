<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Calculadora Básica (Resolução)</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="GET" action="calc.php">
		<input type="number" name="n1" step="0.01">

		<select name="op">
			<option>-</option>
			<option>+</option>
			<option>*</option>
			<option>/</option>
		</select>

		<input type="number" name="n2" step="0.01"> 
		<input type="submit" value="Calcular">
	</form>
</body>
</html>