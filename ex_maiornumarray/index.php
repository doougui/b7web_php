<?php 

$numbers = array();

for ($i = 0; $i <= 10; $i++) {
	$n = rand(0, 100);

	array_push($numbers, $n);
}

echo "<p>".implode(', ', $numbers)."</p>";
echo "<p>MAIOR:".max($numbers)."</p>";