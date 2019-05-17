<?php 

$data = "2017-02";
$dia1 = date('w', strtotime($data."-01")); // Rertorna o primeiro dia do mês (0: Domingo, 1: Segunda, 2: Terça, etc.)
$dias = date('t', strtotime($data)); // Retorna a quantidade de dias que um mês tem
$linhas = ceil(($dia1 + $dias) / 7); // Quantidade de linhas do calendário no mês
$dia1 = -$dia1;
$data_inicio = date("Y-m-d", strtotime($dia1." days", strtotime($data)));
$data_fim = date("Y-m-d", strtotime(( ($dia1 + ($linhas * 7) - 1) )." days", strtotime($data)));

echo "Primeiro dia do mês: ".$dia1."<br/>";
echo "Quantidade de dias: ".$dias."<br/>";
echo "Quantidade de linhas: ".$linhas."<br/>";
echo "Data inicio: ".$data_inicio."<br/>";
echo "Data fim: ".$data_fim;

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
			<?php 
			for ($q = 0; $q < 7; $q++) {
				$w = date("d", strtotime(($q+($l * 7))." days", strtotime($data_inicio)));

				if ($dia1 < 0 && intval($w) > 1 && $mesanterior == false) {
					echo "<td style='color: blue'>".$w."</td>";
				} else {
					$mesanterior = true;

					if ($mesanterior == true && intval($w) >= 1 && intval($w) > $dias) {
						echo "<td style='color: blue'>".$w."</td>";
					} else {
						echo "<td>".$w."</td>";
					}
				}
			} 
			?>
		</tr>
	<?php endfor; ?>
</table>