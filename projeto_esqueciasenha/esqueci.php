<?php 

require "config.php";
use PHPMailer\PHPMailer\PHPMailer;
require "vendor/autoload.php";

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> Host = "smtp.gmail.com";
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = "tls";
$mail -> Username = "devtypeoficial@gmail.com";
$mail -> Password = "84719357devtype";
$mail -> Port = 587;

$mail -> setFrom("devtypeoficial@gmail.com", "DevType");
$mail -> addReplyTo("no-reply@email.com.br");

if (!empty($_POST['email'])) {
	$email = $_POST['email'];

	$mail -> addAddress($email, "User");

	$sql = "SELECT * FROM usuarios WHERE email = :email";
	$sql = $pdo -> prepare($sql);
	$sql -> bindValue(':email', $email);
	$sql -> execute();

	if ($sql -> rowCount() > 0) {
		$sql = $sql -> fetch();
		$id = $sql['id'];

		$token = md5(time().rand(0, 99999).rand(0, 99999));

		$sql = "INSERT INTO usuarios_token (id_usuario, hash, expired_in) VALUES (:id_usuario, :hash, :expired_in)";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(":id_usuario", $id);
		$sql -> bindValue(":hash", $token);
		$sql -> bindValue(":expired_in", date('Y-m-d H-i', strtotime('+2 days')));
		$sql -> execute();

		$subject = "Redefina sua senha.";

		$link = "http://localhost/b7web_php/projeto_esqueciasenha/redefinir.php?token=".$token;
		$msg = "Clique no link para redefinir sua senha: ".$link;

		$mail -> isHTML(true);
		$mail -> Subject = $subject;
		$mail -> Body = nl2br($msg);
		$mail -> AltBody = nl2br(strip_tags($msg));

		if (!$mail -> send()) {
			echo "Não foi possível redefinir sua senha!<br>";
			echo "Erro: ".$mail -> ErrorInfo;
		} else {
			echo "<h2>Verifique seu email.</h2>";
			exit;
		}
	}
}

?>

<form method="POST">
	Digite seu email:<br>
	<input type="email" name="email"><br><br>

	<input type="submit" value="Enviar">
</form>