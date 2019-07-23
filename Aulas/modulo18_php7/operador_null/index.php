<?php 
	$array = array('nome' => 'Douglas', 'idade' => 16);

	// Pre-PHP7
	
	// Exemplo 1
	if (isset($array['idade'])) {
		$idade = $array['idade'];
	} else {
		$idade = '';
	}

	// Exemplo 2
	$idade = (isset($array['idade'])) ? $array['idade'] : '';

	// Pós-PHP7
	$idade = $array['idade'] ?? '';

	echo "IDADE: ".$idade;