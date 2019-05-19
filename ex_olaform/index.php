<form method="POST">
	<label for="name">Qual é o seu nome?</label><br>
	<input id="name" type="text" name="name"><br>
	<input type="submit" value="Enviar"><br><br>
</form>

<?php 
	if (isset($_POST['name']) && !empty($_POST['name'])) {
		$name = $_POST['name'];

		echo "Opa, ".$name.", tudo bom?";
	}
?>