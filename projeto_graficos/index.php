<?php 
	// Download: https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js.
	// Documentação completa e exemplos (samples): https://www.chartjs.org/.

	$vendas = array(10, 20, 30, 40, 20);
	$custos = array(8, 15, 37, 98, 35);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Criação de Gráficos</title>
	<meta charset="UTF-8">
</head>
<body>
	<div style="width: 500px;">
		<canvas id="grafico"></canvas>
	</div>

	<script src="Chart.min.js"></script>
	<script>
		window.onload = function() {
			var contexto = document.getElementById('grafico').getContext('2d');
			var grafico = new Chart(contexto, {
				type: 'line',
				data: {
					labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
					datasets: [{
						label: 'Vendas',
						backgroundColor: '#2f3542',
						borderColor: '#5352ed',
						data: [<?= implode(',', $vendas) ?>],
						fill: false
					}, {
						label: 'Custos',
						backgroundColor: '#ff4757',
						borderColor: '#ff6b81',
						data: [<?= implode(',', $custos) ?>],
						fill: false
					}]
				}
			});
		};
	</script>
</body>
</html>