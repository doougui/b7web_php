<h1>Tabuada</h1>

<table border="1">
	<?php 
		for ($i = 1; $i <= 9; $i++) {
		 	echo "<tr>";
				for ($j = 1; $j <= 9; $j++) {
					echo "<td>".($j * $i)."</td>";
				}
			echo "</tr>";
		}
	?>
</table>