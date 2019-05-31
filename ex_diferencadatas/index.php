<?php 
	require 'Tempo.class.php';

	$t = '2019-05-31 08:00:00';
	$data = date('d/m/Y H:i:s', strtotime($t));

	echo '<p>'.$data.'<br>foi há '.Tempo::diferenca($t).' atrás.</p>';