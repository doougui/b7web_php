<?php 
	require 'classes.php';

	$produtos = new Produtos();
	$produtos -> getLista();

	$produtos -> setOutput(new JsonOutput());
	$data = $produtos -> getOutput();

	print_r($data);