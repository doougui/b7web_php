<?php 

require 'classes.php';

$usuarioDAO = new UsuarioDAO();

$novoUsuario = new Usuario([
    'name' => 'José',
    'email' => 'jose@gmail.com',
    'pass' => md5('teste')
]);

$usuarioDAO -> insert($novoUsuario);

$usuarios = $usuarioDAO -> get();
foreach ($usuarios as $usuario) {
    echo "NOME: {$usuario -> getName()}";
    echo "<hr>";
}