<?php 
include 'contato.class.php';
$contato = new Contato();

if (!empty($_POST['id'])) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$id = addslashes($_POST['id']);

	if (!empty($email)) {
		$contato -> editar($nome, $email, $id);
	}
	header("Location: index.php");
}