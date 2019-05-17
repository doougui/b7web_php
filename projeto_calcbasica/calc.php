<?php 

	if (isset($_GET['n1']) && !empty($_GET['n1']) &&
		 isset($_GET['op']) && !empty($_GET['op']) &&
		 isset($_GET['n2']) && !empty($_GET['n2']) &&
		 is_numeric($_GET['n1']) && is_numeric($_GET['n2'])) 
	{
		$n1 = addslashes($_GET['n1']);
		$op = addslashes($_GET['op']);
		$n2 = addslashes($_GET['n2']);

		if ($op == 'sub') {
			echo $n1." - ".$n2." = ".($n1 - $n2);
		} elseif ($op == 'adi') {
			echo $n1." + ".$n2." = ".($n1 + $n2);
		} elseif ($op == 'mult') {
			echo $n1." * ".$n2." = ".($n1 * $n2);
		} elseif ($op == 'div') {
			echo $n1." / ".$n2." = ".($n1 / $n2);
		} else {
			echo "Operador inexistente";
		}
	} else {
		header('Location: index.php');
	}