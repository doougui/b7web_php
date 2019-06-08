<?php

require "pdostatement.class.php";

$u = new Usuarios();
$res = $u -> selecionar(1);
$u -> inserir("Felipe", "felipe@b7web.com.br", "123");
$u -> atualizar("Felipe 3", "felipe@b7web.com.br", "123", 20);
$u -> excluir(2);
