<?php 

$json = array(
	'nome' => 'Douglas',
	'idade' => 16,
	'sexo' => 'Masculino',
	'fome' => 'Infinita'
);

$json = json_encode($json);
echo $json;