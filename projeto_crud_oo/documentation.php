<?php 
include 'contato.class.php';

// Create new contact
$contato = new Contato();

// Add new contact
$contato -> adicionar('douglaspigoulart@gmail.com', 'Douglas');
$contato -> adicionar('dodgegamer12@gmail.com');

// Get contact
$nome = $contato -> getNome('douglaspigoulart@gmail.com');
echo "Nome: ".$nome;

// Get all contacts
$lista = $contato -> getAll();
print_r($lista);

// Edit contact
$contato -> editar('Dodge', 'dodgegamer12@gmail.com');

// Delete contact 
$excluir = $contato -> excluir('dodgegamer12@gmail.com');

if ($excluir == true) {
	echo "Usuário excluido.";
} else {
	echo "Usuário não foi excluido.";
}

?>