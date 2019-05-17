<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	die($e -> getMessage());
}

$qtd_por_pagina = 20;

$total = 0;
$sql = "SELECT COUNT(*) as c FROM posts";
$sql = $pdo -> query($sql);
$sql = $sql -> fetch();
$total = $sql['c'];
$paginas = $total / $qtd_por_pagina;

$pg = 1;

if (isset($_GET['p']) && !empty($_GET['p'])) {
	$pg = addslashes($_GET['p']);
}

$p = ($pg - 1) * $qtd_por_pagina;

$sql = "SELECT * FROM posts LIMIT $p, $qtd_por_pagina";
$sql = $pdo -> query($sql);

if ($sql -> rowCount() > 0) {

	foreach ($sql -> fetchAll() as $item) {
		echo $item['id'].' - '.$item['titulo'].'<br/>';
	}

}

echo "<hr/>";
for ($i=0; $i < $paginas; $i++) { 
	echo "<a href='./?p=".($i + 1)."'> [".($i + 1)."] </a>";
}
?>