<?php 
	spl_autoload_register(function($class) {
		require 'classes/'.$class.'.php';
	});

	$potoco = new Cavalo();
	$potoco -> falar();

	$ricardo = new Pessoa();
	$ricardo -> andar();