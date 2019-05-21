<?php 

$arr = array();

for ($i = 0; $i <= 10; $i++) {
	$n = rand(0, 100);

	array_push($arr, $n);
}

$unique = array();

echo "<p>".implode(', ', $arr)."</p>";

foreach ($arr as $value) {
	if (!in_array($value, $unique)) {
		$unique[] = $value;
	}
}

echo "<pre>";
print_r($unique);
echo "</pre>";