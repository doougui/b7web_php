<h1>Ordenador de n�meros</h1>

<form method="POST">
	<label for="numbers">Digite os n�meros:</label><br>
	<input type="text" id="numbers" name="numbers"><br>
	<input type="submit" value="Enviar">
</form>

<?php 

	if (isset($_POST['numbers']) && !empty($_POST['numbers'])) {
		$numbers = explode(' ', $_POST['numbers']);
		sort($numbers);

		echo "<pre>";
		print_r($numbers);
		echo "</pre>";
	}

?>