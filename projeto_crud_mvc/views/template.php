<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD MVC</title>
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
	<header>
		<h1>Meu sistema de contatos</h1>
	</header>

	<section>
		<?php $this -> loadViewInTemplate($viewName, $viewData); ?>
	</section>

	<footer>
		<p>Todos os direitos reservados.</p>
	</footer>

	<!-- JavaScript -->
	<script src="<?= BASE_URL ?>assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?= BASE_URL ?>assets/js/script.js"></script>
</body>
</html>