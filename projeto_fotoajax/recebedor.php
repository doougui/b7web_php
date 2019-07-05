<?php 
	if (isset($_FILES['foto']) && !empty($_FILES['foto']) &&
			isset($_POST['nome']) && !empty($_POST['nome'])) 
	{
		$arquivo = $_FILES['foto'];
		move_uploaded_file($arquivo['tmp_name'], 'fotos/'.$arquivo['name']);

		echo "Arquivo de ".$_POST['nome']." enviado com sucesso!";
	} 