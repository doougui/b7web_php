<?php

for ($i = 2; $i <= 1000; $i++) {
	$titulo = 'Lorem ipsum dolor sit amet'.rand(1000, 9999).', consectetur adipisicing elit.';
	$data_criado = date('Y-m-d H.i.s');
	$corpo = rand(9999, 99999).'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet fugiat, expedita illum, delectus odio illo corrupti dolorem eos consectetur placeat, quaerat, blanditiis? Cumque quas deserunt, reiciendis, tenetur iste nulla delectus!';
	$autor = 'Douglas P. Goulart';

	$sql = "INSERT INTO posts (titulo, data_criado, corpo, autor) VALUES ('$titulo', '$data_criado', '$corpo', '$autor')";
	$sql = $pdo -> query($sql);
}

?>