<?php 
	//require 'vendor/autoload.php'; (Também pode ser usado nesta forma).
	require __DIR__.'/vendor/autoload.php';

	$clientinfo = new LojaB7Web\Clients\ClientInfo;
	$clientorders = new LojaB7Web\Clients\ClientOrders;
	$productinfo = new LojaB7Web\Products\ProductInfo;

	echo "<p>NAME: ".$clientinfo -> getName()."</p>";
	echo "<p>IDADE: ".$clientinfo -> getAge()."</p>";

	echo "<hr>";

	print_r($clientorders -> getAll());

	echo "<hr>";

	echo "<p>PRODUCT NAME: ".$productinfo -> getName()."</p>";