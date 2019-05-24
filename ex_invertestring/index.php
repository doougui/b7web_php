<h1>Inverter String</h1>

<form method="POST">
	<label for="phrase">Palavra/Frase:</label><br>
	<input type="text" id="phrase" name="phrase"><br>

	<input type="submit" value="Enviar">
</form>

<?php 

	if (isset($_POST['phrase']) && !empty($_POST['phrase'])) {
		$phrase = $_POST['phrase'];
		$arr = array();

		for ($i = strlen($phrase) - 1; $i >= 0; $i--) {
			$arr[] = $phrase[$i];
		}

		echo $phrase."<br>";
		echo implode('', $arr);
	}

?>