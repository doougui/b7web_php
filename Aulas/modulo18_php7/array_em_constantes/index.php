<?php 
	define('CONFIG', array(
		'host'   => 'localhost',
		'dbname' => 'database',
		'dbuser' => 'root',
		'dbpass' => ''
	));

	echo CONFIG['host'].' - '.CONFIG['dbname'].' - '.CONFIG['dbuser'].' - '.CONFIG['dbpass'];