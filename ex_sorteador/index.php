<h1>Sorteador</h1>

<?php 
	$file_content = file_get_contents('lista.txt');
 	$names = explode("\n", $file_content);

 	$index = rand(0, (sizeof($names) - 1));

 	echo "Sorteado: ".$names[$index];
?>