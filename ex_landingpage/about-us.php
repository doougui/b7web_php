<?php 
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['usertype']);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<!-- Title &¨Meta -->
	<meta charset="utf-8">
	<title>Hearless</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Incluindo todos na educação.">
	<meta name="theme-color" content="#115ffc">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Prelaod -->
	<link rel="preload" href="assets/js/jquery-3.3.1.min.js" as="script">
	<link rel="preload" href="assets/css/normalize.css" as="style">
	<link rel="preload" href="assets/css/style.css" as="style">
	<!-- Favicon & CSS -->
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<!-- Header -->
	<header class="header-bg">
		<div class="header container">
			<!-- Logo -->
			<div class="header-logo">
				<img src="assets/img/logo.png" alt="DevType" width="40">
				<a href="./">Hearless</a>
			</div> 
			<!-- Navigation -->
			<nav>
				<ul>
					<div class="header-items">
						<li><a href="./How_it_works.php">Como funciona</a></li>
						<li><a href="./about-us.php">Sobre nós</a></li>
						<li><a href="./contact.php">Contato</a></li>
					</div>
					<div class="login-section">
						<li><a href="./login.php">Entrar</a></li>
						<li><a href="./signup.php">Registre-se</a></li>
					</div>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Resources. This is designed for whom? -->
	<section class="resources-bg container">
		<div class="about-us-title">
			<h1>Sobre nôs</h1>
			<p>Um pouco sobre nós</p>
		</div>
	
		<div class="resources">
			<div class="resource">
				<img src="assets/img/undraw_developer_activity_bv83.svg" alt="Equipe">
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ullam! Tenetur accusantium explicabo, qui.</p>
			</div>

			<div class="resource">
				<img src="assets/img/undraw_building_blocks_n0nc.svg" alt="Notificação">
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>rem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ullam! Tenetur accusantium explicabo, qui.</p>
			</div>

			<div class="resource">
				<img src="assets/img/undraw_wallet_aym5.svg" alt="Libras">
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>rem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ullam! Tenetur accusantium explicabo, qui.</p>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer-bg">
		<div class="footer container">
			<div class="footer-item">
				<p><strong>Hearless</strong></p>
				<p><a href="#">Como funciona</a></p>
				<p><a href="#">Sobre nós</a></p>
				<p><a href="#">Contato</a></p>
			</div>
			<div class="footer-item">
				<p>Criado com ♥ por <a href="#">Doougui</a></p>
				<p>Lorem: <a href="#">Lorem ipsum dolor sit.</a></p>
			</div>
			<div class="footer-item">
				<p><a href="#">Lorem ipsum dolor sit amet.</a></p>
				<p><a href="#">Lorem ipsum dolor sit amet.</a></p>
				<p><a href="#">Lorem ipsum dolor sit amet.</a></p>
				<p><a href="#">Lorem ipsum dolor sit amet.</a></p>
			</div>
			<div class="footer-item">
				<p><a href="#">Lorem ipsum dolor sit.</a></p>
				<p><a href="#">Lorem ipsum.</a></p>
				<p>2019</p>
			</div>
		</div>
	</footer>

	<!-- Copyright -->
	<section class="copyright">
		<p>Hearless © Todos os direitos reservados.</p>
	</section>

	<!-- JavaScript -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>