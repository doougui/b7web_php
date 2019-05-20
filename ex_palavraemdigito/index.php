<p>Conversor de Palavra em Dígito</p>

<form method="POST">
	<input type="text" name="numbers">
	<input type="submit" value="Enviar">
</form>

<hr>

<?php 

	if (isset($_POST['numbers']) && !empty($_POST['numbers'])) {
		$words = $_POST['numbers'];
		$numbers = explode(',', $words);

		$result = array();

		foreach ($numbers as $number) {
			$number = trim($number);

			switch ($number) {
				case 'um':
					$result[] = 1;
					break;
				case 'dois':
					$result[] = 2;
					break;
				case 'três':
					$result[] = 3;
					break;
				case 'quatro':
					$result[] = 4;
					break;
				case 'cinco':
					$result[] = 5;
					break;
				case 'seis':
					$result[] = 6;
					break;
				case 'sete':
					$result[] = 7;
					break;
				case 'oito':
					$result[] = 8;
					break;
				case 'nove':
					$result[] = 9;
					break;
				case 'dez':
					$result[] = 10;
					break;
			}
 		}

 		echo $words."<br>";
 		echo implode(", ", $result);
	}

?>