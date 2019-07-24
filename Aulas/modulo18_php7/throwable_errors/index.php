<?php 
	try {
		dsfujdjnusfnasdf();
	} catch (Throwable $e) {
		echo "<pre>";
		echo 'Erro: '.$e -> getMessage().'<br>';
		echo "Arquivo: ".$e -> getFile().'<br>';
		echo "Linha: ".$e -> getLine().'<br><br>';
	}

	echo "Continuação do código...".'<br><br>';

	function verificarString($str) {
		if (empty($str)) {
			throw new Exception("Erro Fatal: <b>String vazia</b>.");
		}
	}

	try {
		verificarString('');
		echo "String OK";
	} catch(Exception $e) {
		die($e->getMessage());
	}