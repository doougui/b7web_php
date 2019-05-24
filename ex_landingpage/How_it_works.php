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


	<!-- Advantages. Describes what you'll win using this system -->
	<section class="advantages">

		<div class="about-us-title">
			<h1>Como funciona</h1>
			<p>Nosso sistema ele funciona com alguns passos simples que veremos a seguir.</p>
		</div>

		<div class="advantage">
			<div class="advantage-content">
				<div class="advantage-picture">
					<img src="assets/img/undraw_laravel_and_vue_59tp.svg" alt="Registre-se">
				</div>
				<div class="advantage-text texthow">
					<h2>Primeiro você irá se cadastrar como professor ou aluno.</h2>
					<p>Você deverá se cadastrar para informar suas informações para criarmos seu perfil em nosso site.</p>
				</div>
			</div>
		</div>

		<div class="advantage bg-2">
			<div class="advantage-content">
				<div class="advantage-picture">
					<img src="assets/img/undraw_login_jdch.svg" alt="login">
				</div>
				<div class="advantage-text texthow">
					<h2>E depois de confirmar seu email você poderá se logar no site.</h2>
					<p>Após isso iremos enviar um email para você com um link onde você deverá abrir para confirmar seu email.</p>
				</div>
			</div>
		</div>

		<div class="advantage">
			<div class="advantage-content">
				<div class="advantage-picture">
					<img src="assets/img/undraw_multitasking_hqg3.svg" alt="estude">
				</div>
				<div class="advantage-text texthow">
					<h2>Após isso você irá ler e estudar os textos adicionados pelo professor.</h2>
					<p>Agora você já tem acesso a sua dashboard do site, você so irá precisar adicionar seu professor na plataforma e começar a estudar normalmente utilizando os conteudos disponibilizados por ele.</p>
				</div>
			</div>
		</div>

		<div class="advantage bg-2">
			<div class="advantage-content">
				<div class="advantage-picture">
					<img src="assets/img/undraw_done_a34v.svg" alt="Parabens">
				</div>
				<div class="advantage-text texthow">
					<h2>E assim você conseguira tirar o melhor proveito dos seus estudos.</h2>
					<p>Feito. Agora está tudo pronto para você começar a sua jornada de estudos.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer-bg">
		<div class="footer container">
			<div class="footer-item">
				<p><strong>Hearless</strong></p>
				<p><a href="./How_it_works.php">Como funciona</a></p>
				<p><a href="./about-us.php">Sobre nós</a></p>
				<p><a href="./contact.php">Contato</a></p>
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