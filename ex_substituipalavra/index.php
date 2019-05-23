<h1>Subtituidor</h1>

<form method="POST">
	<label for="sentence">Frase:</label><br>
	<input type="text" id="sentence" name="sentence"><br>

	<label for="search">Procurar por:</label><br>
	<input type="text" id="search" name="search"><br>

	<label for="replace">Trocar por:</label><br>
	<input type="text" id="replace" name="replace"><br>

	<input type="submit" value="Enviar">
</form>

<?php 
	if (isset($_POST['sentence']) && !empty($_POST['sentence']) &&
		 isset($_POST['search']) && !empty($_POST['search']) &&
		 isset($_POST['replace']) && !empty($_POST['replace'])) 
	{
		$sentence = $_POST['sentence'];
		$search = trim($_POST['search']);
		$replace = trim($_POST['replace']);

		$new_sentence = str_ireplace($search, $replace, $sentence);

		echo "Frase: ".$sentence."<br>";
		echo "Nova frase: ".$new_sentence;
	}

?>