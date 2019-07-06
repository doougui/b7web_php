<?php 
	session_start();

	if (!isset($_SESSION['user']['id']) || empty($_SESSION['user']['id'])) {
		header('Location: login.php');
		exit;
	}

?>

<h1>Dashboard</h1>
<?= $_SESSION['user']['email'] ?>