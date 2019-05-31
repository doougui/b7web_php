<?php 
	require 'Tempo.class.php';

	$t = '2019-05-30 18:59:30';
	$data = date('d/m/Y H:i:s', strtotime($t));

	echo '<p>'.$data.'<br>foi há '.Tempo::diferenca($t).' atrás.</p>';