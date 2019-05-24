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
	<!-- Features. Things like dashboard, Anki, and additional features that we provide -->
	<section class="features-bg">¹
		<div class="features-title">
			<h1>Nossos contatos</h1>
			<p id="contact">Todos os nossos contatos estarão disponíveis abaixo</p>
		</div>

		<div class="features container">
			<div class="feature">
				<h2>Telefone</h2>
				<p id="contact">
					(48) 9902-xxxx : Douglas
					<br>
					<br>
					(48) 9631-xxxx : Alvez
					<br>
					<br>
					(48) 9857-xxxx : Leandro
					<br>
					<br>
					(48) 9857-xxxx : JP
				</p>

		
			</div>
			<div class="feature">
				<h2>Emails</h2>
				<p id="contact">
					DevDouguii@gmail.com
					<br>
					<br>
					devAlvez@gmail.com
					<br>
					<br>
					devLesirus@gmail.com
					<br>
					<br>
					devJhonisboi@gmail.com
				</p>

			
			</div>
			<div class="feature">
				<h2>Redes sociais</h2>
				<p id="contact">
					Facebook: DevType
					<br>
					<br>
					Intagram: @Devtype
					<br>
					<br>
					twitter: @Devtype
					<br>
					<br>
					Discord: Devtype#0666
				</p>
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
				<p>Criado com ♥ por <a href="#">DevType</a></p>
				<p>Prof. <a href="#">EMANUELE STAUDT DIAS</a></p>
			</div>
			<div class="footer-item">
				<p><a href="#">Douglas Pinheiro Goulart</a></p>
				<p><a href="#">Leandro Soares Cardinal</a></p>
				<p><a href="#">João Pedro Domingos</a></p>
				<p><a href="#">João Vitor Assunção Alves</a></p>
			</div>
			<div class="footer-item">
				<p><a href="#">CEDUP Diomicio Freitas</a></p>
				<p><a href="#">201 - INT</a></p>
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