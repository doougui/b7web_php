<?php 
	require 'facebook.php';

	$fb = new Facebook();

	$post = $fb -> createPost();
	$post -> setAuthor('Douglas');
	$post -> setMessage('Esta é a mensagem da minha postagem.');

	echo "AUTOR: ".$post -> getAuthor();
	echo "<hr>";

	$post2 = $fb -> createPost();
	$post2 -> setAuthor('Douglas');
	$post2 -> setMessage('Esta é a segunda mensagem da minha postagem.');

	echo "AUTOR: ".$post2 -> getAuthor();
	echo "<hr>";