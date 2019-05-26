<?php 

$data = $_GET['ano'].'-'.$_GET['mes'];
$dia1 = date('w', strtotime($data."-01")); // Rertorna o primeiro dia do mês (0: Domingo, 1: Segunda, 2: Terça, etc.)
$dias = date('t', strtotime($data)); // Retorna a quantidade de dias que um mês tem
$linhas = ceil(($dia1 + $dias) / 7); // Quantidade de linhas do calendário no mês
$dia1 = -$dia1;
$data_inicio = date("Y-m-d", strtotime($dia1." days", strtotime($data)));
$data_fim = date("Y-m-d", strtotime(( ($dia1 + ($linhas * 7) - 1) )." days", strtotime($data)));

$mesanterior = false;
?>

<table border="1" width="100%">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sab</th>
	</tr>
	<?php for ($l = 0; $l < $linhas; $l++): ?>
		<tr>
			<?php for ($q = 0; $q < 7; $q++): ?>
			<?php 
				$t = strtotime(($q + ($l * 7)).'days', strtotime($data_inicio));
				$w = date('Y-m-d', $t);
			?>
				<td>
				<?php 

				echo date('d/m', $t)."<br>";
				$w = strtotime($w);

				foreach ($lista as $item) {
					$dr_inicio = strtotime($item['data_inicio']);
					$dr_fim = strtotime($item['data_fim']);

					if ($w >= $dr_inicio && $w <= $dr_fim) {
						echo $item['pessoa']." (".$item['id_carro'].") <br>";
					}
				}
				?>
				</td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>