<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MVC</title>
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
	<?php $this -> loadViewInTemplate($viewName, $viewData); ?>

	<!-- JavaScript -->
	<script>var BASE_URL = '<?= BASE_URL ?>'</script>
	<script src="<?= BASE_URL ?>assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?= BASE_URL ?>assets/js/script.js"></script>
</body>
</html>