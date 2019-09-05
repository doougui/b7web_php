<?php 
	require 'classes.php';

	$book1 = new Book('Livro de Teste', 'Douglas Pinheiro Goulart');
	$book2 = new Book('Teste de Livro', 'Goulart Pinheiro Douglas');
	$book3 = new Book('etseT ed orviL', 'traluoG oriehniP salgouD');

	$booklist = new BookList();
	$booklist -> addBook($book1);
	$booklist -> addBook($book2);
	$booklist -> addBook($book3);

	echo "<pre>";
	echo "TOTAL DE LIVROS: ".$booklist -> count();
	echo "<hr>";

	// $booklist -> removeBook($book2);

	echo "TOTAL DE LIVROS APÓS REMOVER: ".$booklist -> count();
	echo "<hr>";

	$livro1 = $booklist -> current();
	echo "Livro 1: ".$livro1 -> getTitle().' - '.$livro1 -> getAuthor().'<br>';

	$booklist -> next();

	$livro2 = $booklist -> current();
	echo "Livro 2: ".$livro2 -> getTitle().' - '.$livro2 -> getAuthor().'<br>';

	$booklist -> reset();

	$livro3 = $booklist -> current();
	echo "Livro 3: ".$livro3 -> getTitle().' - '.$livro3 -> getAuthor().'<br>';

	echo "<hr>";

	while ($booklist -> valid()) {
		$livro = $booklist -> current();
		echo "Livro: ".$livro -> getTitle().' - '.$livro -> getAuthor().'<br>';

		$booklist -> next();
	}