<?php 
	// Documentação completa: http://mpdf.github.io/.
	ob_start();
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Relatório de Teste</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Relatório</h1>
		<table border="1" width="100%">
			<tr>
				<th>Nome do cliente</th>
				<th>Valor do pedido</th>
				<th>Data de entrega</th>
			</tr>
			<tr>
				<td>Douglas</td>
				<td>R$ 1.356</td>
				<td>04/07/2019</td>
			</tr>
			<tr>
				<td>Douglas</td>
				<td>R$ 1.356</td>
				<td>04/07/2019</td>
			</tr>
			<tr>
				<td>Douglas</td>
				<td>R$ 1.356</td>
				<td>04/07/2019</td>
			</tr>
			<tr>
				<td>Douglas</td>
				<td>R$ 1.356</td>
				<td>04/07/2019</td>
			</tr>
			<tr>
				<td>Douglas</td>
				<td>R$ 1.356</td>
				<td>04/07/2019</td>
			</tr>
		</table>
	</body>
	</html>
<?php 
	$html = ob_get_contents();
	ob_end_clean();

	require 'vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf();
	$mpdf -> WriteHTML($html);

	/*

	* Abre o arquivo no navegador.
	$mpdf -> Output(); 
	*/
	
	/*
	* Diferentes ações de output.

	Ações (segundo parametro):
		* I = Abre no browser (Padrão).
		* D = Faz o download.
		* F = Salva no servidor (Aparece, por exemplo, arquivo.pdf na página do projeto).
	*/ 

	$arquivo = md5(time().rand(0, 99999)).'.pdf';

	// Exemplo de Uso:
	
	$mpdf -> Output($arquivo, 'F');
	$link = 'http://localhost/b7web_php/projeto_relatoriopdf/'.$arquivo;
	
	echo "<p>Faça o download no link: <a href='".$link."' target='_blank'>".$link."</a></p>";
?>