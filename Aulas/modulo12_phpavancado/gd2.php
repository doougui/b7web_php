<?php

$imagem = "files/imagem.jpg";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("files/mini_imagem.jpg");

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);
$imagem_original = imagecreatefromjpeg("files/imagem.jpg");

$imagem_mini = imagecreatefromjpeg("files/mini_imagem.jpg");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original);
imagecopy($imagem_final, $imagem_mini, ($largura_original - $largura_mini - 50), ($altura_original - $altura_mini - 50), 0, 0, $largura_mini, $altura_mini);


header("Content-Type: image/jpeg");
imagejpeg($imagem_final, NULL, 100);

?>