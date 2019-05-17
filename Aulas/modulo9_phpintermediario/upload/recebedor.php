<?php
	$arquivo = $_FILES['arquivo'];

	if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

		$path = pathinfo($arquivo['name']);

		$nomedoarquivo = md5(time().rand(0, 999)).'.'.$path['extension'];
		move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nomedoarquivo);

		echo "Arquivo enviado com sucesso!";

	}
?>