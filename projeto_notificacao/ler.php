<?php 	
	$dsn = "mysql:dbname=projeto_notificacao;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		die('Erro: '.$e -> getMessage());
	}

	$sql = "SELECT * FROM notificacoes WHERE id_user = '1'";
	$sql = $pdo -> query($sql);

	if ($sql -> rowCount() > 0) {
		foreach ($sql -> fetchAll() as $item) {
			$propriedades = json_decode($item['propriedades']);
			echo "<pre>";
				echo "TIPO: ".$item['notificacao_tipo'].'<br>';

				if ($item['notificacao_tipo'] == 'MSG') {
					echo "MENSAGEM: ".$propriedades -> msg.'<br>';
				} elseif ($item['notificacao_tipo'] == 'CURTIDA') {
					echo 'O usuário '.$propriedades -> curtidor.' curtiu a foto '.$propriedades -> id_foto.'<br>';
				}

				echo "<button data-id='".$item['id']."' class='marcar_lido'>Marcar como lido.</button>";
			echo "</pre>";
			echo "<hr>";
		}
	}