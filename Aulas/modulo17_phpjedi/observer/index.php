<?php 
	require 'classes.php';

	$observer = new UsuarioObserver();
	$user = new Usuario('Douglas');

	$user -> attach($observer);

	echo "<pre>";

	echo "MEU NOME É: ".$user -> getName();
	echo "<hr>";

	$user -> setName('Bonieky');

	echo "MEU NOME É: ".$user -> getName();
	echo "<hr>";

	// $user -> detach($observer);
	$user -> setName('Fulano');

	echo "MEU NOME É: ".$user -> getName();
	echo "<hr>";