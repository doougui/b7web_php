<?php 
	$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Jaguaruna&appid=c5f9d99bcc5448f85ceb9b65f03bd150');
	$json = json_decode($json);

	$obj = new StdClass();
	$obj -> id = 111;
	$obj -> main = 'Rain';
	$obj -> description = 'Heavy rain';
	$obj -> icon = '014n';

	$json -> weather[] = $obj;

	echo "<pre>";
	echo "Registros retornados: ".count($json -> weather).'<br>';
	echo "Nome da cidade: ".$json -> name.'<br>';
	echo "Pressão: ".$json -> main -> pressure.'<br>';
	echo "Nível do mar: ".$json -> main -> sea_level.'<br>';

	foreach ($json -> weather as $item) {
		echo "Clima: ".$item -> description.'<br>';
	}
	echo "</pre>";

	$json = json_encode($json);
	print_r($json);

