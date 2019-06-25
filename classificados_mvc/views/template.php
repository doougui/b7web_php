<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<!-- Title -->
	<title>Classificados</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>

	<?php 
		if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
			$u = new Usuarios();
			$id = $_SESSION['cLogin'];
			$usuario = $u -> getDados($id);
		}
	?>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?= BASE_URL ?>" class="navbar-brand">Classificados</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="<?= BASE_URL ?>">Olá, <?= $usuario['nome']; ?></a></li>
					<li><a href="<?= BASE_URL ?>anuncios">Meus Anúncios</a></li>
					<li><a href="<?= BASE_URL ?>login/sair">Sair</a></li> 
				<?php else: ?>
					<li><a href="<?= BASE_URL ?>cadastrar">Cadastre-se</a></li>
					<li><a href="<?= BASE_URL ?>login">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>

	<?php $this -> loadViewInTemplate($viewName, $viewData); ?>

	<!-- JS -->
	<script src="<?= BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?= BASE_URL ?>assets/js/script.js"></script>
</body>
</html>