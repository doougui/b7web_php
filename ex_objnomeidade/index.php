<?php 
	require 'pessoa.class.php';

	$pessoa = new Pessoa('Douglas', '22/09/2002');

	echo '<p>'.$pessoa -> getNome().' tem '.$pessoa -> getIdade().' anos</p>';

	