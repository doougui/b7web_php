<?php 
	// PSR-4
	spl_autoload_register(function($class) {
		$base_dir = __DIR__.'/packages/';
		$file = $base_dir.str_replace('\\', '/', $class).'.php';

		if (file_exists($file)) {
			require $file;
		}
	});

	$clientinfo = new LojaB7Web\Clients\ClientInfo;
	$clientorders = new LojaB7Web\Clients\ClientOrders;
	$productinfo = new LojaB7Web\Products\ProductInfo;

	echo "<p>NAME: ".$clientinfo -> getName()."</p>";
	echo "<p>IDADE: ".$clientinfo -> getAge()."</p>";

	echo "<hr>";

	print_r($clientorders -> getAll());

	echo "<hr>";

	echo "<p>PRODUCT NAME: ".$productinfo -> getName()."</p>";