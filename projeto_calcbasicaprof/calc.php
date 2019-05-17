<?php 

if (!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['op'])) {

	$n1 = floatval($_GET['n1']);
	$n2 = floatval($_GET['n2']);
	$op = $_GET['op'];

	switch ($op) {
		case '-':
			$conta = $n1 - $n2;
			echo $n1.' - '.$n2.' = '.$conta;
			break;
		case '+':
			$conta = $n1 + $n2;
			echo $n1.' + '.$n2.' = '.$conta;
			break;
		case '*':
			$conta = $n1 * $n2;
			echo $n1.' * '.$n2.' = '.$conta;
			break;
		case '/':
			$conta = $n1 / $n2;
			echo $n1.' / '.$n2.' = '.$conta;
			break;
		default:
			break;
	}

} else {
	header("Location: index.php");
}