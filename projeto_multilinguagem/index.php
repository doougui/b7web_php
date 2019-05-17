<?php 

session_start();

if (!empty($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

require "config.php";
require "language.class.php";

$lang = new Language();

?>

<a href="index.php?lang=en-us">English</a>
<a href="index.php?lang=pt-br">Português</a>
<a href="index.php?lang=es-uy">Español</a>

<hr>

<?php $lang -> get('DEFINED LANGUAGE'); ?>: <?= $lang -> getLanguage() ?>

<hr>

Category: <?php $lang -> get('PHOTO_CATEGORY'); ?>

<hr>

<button><?php $lang -> get('BUY'); ?></button>
<a href="#"><?php $lang -> get('LOGOUT'); ?></a>

<hr>

<?php 

$sql = "SELECT id, (select value from language where language.lang = :lang and language.name 
	  = categories.lang_item) as name FROM categories";

$sql = $pdo -> prepare($sql);
$sql -> bindValue(":lang", $lang -> getLanguage());
$sql -> execute();

if ($sql -> rowCount() > 0) {
	foreach ($sql -> fetchAll() as $category) {
		echo $category['name']."<br>";
	}
}
?>

