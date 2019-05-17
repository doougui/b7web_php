<?php
	
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://alunos.b7web.com.br/api/ping");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Douglas&idade=16&sexo=masculino");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
curl_close($ch);

print_r($response);

?>