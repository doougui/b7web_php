<?php 
	require 'classes.php';

	$carga = new Carga(7000);

	$moto = new Moto();
	$carro = new Carro();
	$caminhão = new Caminhao();

	$moto -> setSucessor($carro);
	$carro -> setSucessor($caminhão);

	$moto -> transport($carga);
