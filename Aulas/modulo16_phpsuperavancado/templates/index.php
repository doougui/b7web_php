<?php 
	require 'template.php';

	$array = array(
		'titulo' => 'Título da Página',
		'nome' => 'Douglas',
		'idade' => 16
	);

	$tpl = new Template('template.phtml');
	$tpl -> render($array);