<p>Calculadora de imposto</p>

<form method="POST">
	<label for="value">Valor do produto:</label><br>
	<input id="value" type="text" name="value"><br><br>

	<label for="tax">Taxa de imposto (em %):</label><br>
	<input id="tax" type="text" name="tax"><br><br>

	<input type="submit" value="Calcular"><br><br>
</form>

<?php 
	if (isset($_POST['value']) && !empty($_POST['value']) &&
		 isset($_POST['tax']) && !empty($_POST['tax'])) 
	{
		$value = floatval(str_replace(",", ".", $_POST['value']));
		$tax = intval($_POST['tax']);

		echo "Valor do produto: R$ ".$value."<br>";
		echo "Taxa de imposto: ".$tax."%"."<br>";

		echo "<hr>";

		echo "Imposto: R$ ".$value * ($tax / 100)."<br>";
		echo "Produto: R$ ".($value - ($value * ($tax / 100)))."<br>";
	}
?>