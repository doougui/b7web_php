<?php 
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$msg = addslashes($_POST['msg']);

		$to = "douglaspigoulart@gmail.com";
		$subject = "Assunto do contato.";
		$body = "Nome: ".$nome."<br>E-mail: ".$email."<br>Message: ".$msg."<br>";
		$header = "From: dodgegamer12@gmail.com"."\r\n".
					 "Reply-To: ".$email."\r\n".
					 "X-Mailer: PHP/".phpversion();

		if (mail($to, $subject, $body, $header)) {
			echo "E-mail enviado com sucesso.";
		} else {
			echo "E-mail não pode ser enviado."; 
		}

		exit;
	}
?>

<form method="POST">
	Nome:<br>
	<input type="text" name="nome"><br><br>

	E-mail:<br>
	<input type="email" name="email"><br><br>

	Mensagem:<br>
	<textarea name="msg"></textarea><br><br>

	<input type="submit" value="Enviar">
</form>