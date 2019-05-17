<?php 

/* Requires */
require "config.php";
use PHPMailer\PHPMailer\PHPMailer;
require "vendor/autoload.php";

/* PHPMailer configs */
$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> Host = 'smtp.gmail.com';
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = 'tls';
$mail -> Username = 'devtypeoficial@gmail.com';
$mail -> Password = '84719357devtype';
$mail -> Port = 587;

/* On send */
if (isset($_POST['nome']) && !empty($_POST['nome']) && 
	 isset($_POST['email']) && !empty($_POST['email'])) 
	{
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		/* SetFrom & ReplyTo */
		$mail -> setFrom('devtypeoficial@gmail.com', 'DevType');
		$mail -> addReplyTo('no-reply@email.com.br');

		/* Receiver */
		$mail -> addAddress($email, $nome);

		/* Insert user in DB */
		$pdo -> query("INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')");
		$id = $pdo -> lastInsertId();

		/* Generate code and link */
		$md5 = md5($id);
		$link = "http://localhost/b7web_php/projeto_cadastrocomaprovacao/confirmar.php?h=".$md5;

		/* Subject */
		$assunto = "Confirme seu cadastro.";
		/* Message */
		$msg = "Clique no link abaixo para confirmar seu cadastro:\n\n".$link;

		/* Check if is HTML */
		$mail -> isHTML(true);
		/* Define subject */
		$mail -> Subject = $assunto;
		/* Body */
		$mail -> Body = nl2br('Este é o conteúdo da mensagem em <b>HTML!</b><br><img src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"><br>'.$msg);
		/* Alt body */
		$mail -> AltBody = nl2br(strip_tags($msg));
		/* Attachment */
		$mail -> addAttachment('tmp/image.jpg', 'image.jpg');

		/* Send email */
		if (!$mail -> send()) {
			echo "Não foi possível se cadastrar!<br>";
			echo "Erro: ".$mail -> ErrorInfo;
		} else {
			echo "<h2>Confirme seu cadastro!</h2>";
			exit;
		}
	}

?>

<!-- Form -->
<form method="POST">
	Nome:<br>
	<input type="text" name="nome"><br><br>

	Email:<br>
	<input type="email" name="email"><br><br>

	<input type="submit" value="Cadastrar">
</form>