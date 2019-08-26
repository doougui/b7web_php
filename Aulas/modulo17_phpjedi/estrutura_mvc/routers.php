<?php 
	global $routes;
	$routes = array();

	// Ordem do mais especifico para o menos especifico;
	// $routes['/cadastro/{nome}/{sobrenome}'] = '/usuarios/cadastrar/:nome/:sobrenome';
	$routes['/galeria/{id}'] = '/galeria/abrir/:id';
	$routes['/news/{id}'] = '/noticia/abrir/:id';
	$routes['/{titulo}'] = '/noticia/abrir/:titulo';