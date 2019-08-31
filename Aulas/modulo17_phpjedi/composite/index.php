<?php 
	require 'classes.php';

	$form = new Form('POST');

	$form -> addElement(new Label('Usuário:'));
	$form -> addElement(new InputText('usuario'));

	$form -> addElement(new Label('Senha:'));
	$form -> addElement(new InputText('senha', 'password'));

	$form -> addElement(new SubmitButton('Enviar'));

	echo $form -> render();