<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Slug MVC</title>
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
	<h1>Topo</h1>
	<a href="<?= BASE_URL ?>">Home</a>
	<a href="<?= BASE_URL ?>galeria">Galeria</a>
	<hr>

	<?php $this -> loadViewInTemplate($viewName, $viewData); ?>

	<!-- JavaScript -->
	<script src="<?= BASE_URL ?>assets/js/script.js"></script>
</body>
</html>