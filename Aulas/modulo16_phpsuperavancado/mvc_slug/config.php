<?php 
	require 'environment.php';

	$config = array();

	if (ENVIRONMENT == 'development') {
		define("BASE_URL", "http://localhost/b7web_php/Aulas/modulo16_phpsuperavancado/mvc_slug/");
		$config['dbname'] = 'mvc_slug';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	} else {
		define("BASE_URL", "http://localhost/b7web_php/Aulas/modulo16_phpsuperavancado/mvc_slug/");
		$config['dbname'] = 'mvc_slug';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	}

	global $db;

	try {
		$db = new PDO("mysql:dbname=".$config['dbname'].";host".$config['host'], $config['dbuser'], $config['dbpass']);
	} catch (Exception $e) {
		exit("Erro: ".$e -> getMessage());
	}
