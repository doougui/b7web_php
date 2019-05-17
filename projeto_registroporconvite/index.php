<?php
session_start();

require "config.php";

if (empty($_SESSION['id'])) {
	header("Location: login.php");
}

$email = '';
$sql = "SELECT email, codigo, registros FROM usuarios WHERE id = '".addslashes($_SESSION['id'])."'";
$sql = $pdo -> query($sql);

if ($sql -> rowCount() > 0) {
	$info = $sql -> fetch();
	$email = $info['email'];
}
?>

<h1>Área interna do sistema</h1>
<p>Usuário: <?php echo $email; ?> - <a href="sair.php">Sair</a></p>
<p>Link: http://localhost/projeto_registroporconvite/register.php?codigo=<?php echo $info['codigo']; ?></p>
<p>Convites: <?php 

if ($info['registros'] < 5) {
	echo $info['registros']." convidado(s) (MAX: 5)."; 
} else {
	echo "Convites expirados!";
}

?></p>