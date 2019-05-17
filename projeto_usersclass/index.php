<?php

require "usuario.class.php";

// Set new usuario
$usuario = new Usuario();
$usuario -> setEmail("teste@gmail.com");
$usuario -> setSenha("123");
$usuario -> setNome("Testador");
$usuario -> salvar();

$usuario = new Usuario(3);

// Set nome
echo "Meu nome é: ".$usuario -> getNome();
$usuario -> setNome('Fulano');
$usuario -> salvar();

// Delete 
$usuario -> delete();
?>