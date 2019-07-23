<?php 
	$a = 50;
	$b = 20;
	$r = $a <=> $b;

	echo $r;

	/*
		* $r == -1 -> O $a é MENOR que o $b.
		* $r == 0 -> Quando os valores forem iguais.
		* $r == 1 -> O $a é MAIOR que o $b.
	 */