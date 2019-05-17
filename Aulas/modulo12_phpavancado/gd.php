<?php

$filename = "files/imagem.jpg";

$width = 200;
$height = 200;

list($original_width, $original_height) = getimagesize($filename);

$ratio = $original_width / $original_height;

if ($width / $height > $ratio) {
	$width = $height * $ratio;
} else {
	$height = $width / $ratio;
}

echo "Original width: ".$original_width."<br>"."Original height: ".$original_height."<br><br>";
echo "Width: ".$width."<br>"."Height: ".$height;

$image = imagecreatetruecolor($width, $height);
$original_image = imagecreatefromjpeg($filename);

imagecopyresampled($image, $original_image, 
	0, 0, 0, 0, 
	$width, $height, $original_width, $original_height);

header("Content-Type: image/jpeg");
imagejpeg($image, NULL, 100);

?>