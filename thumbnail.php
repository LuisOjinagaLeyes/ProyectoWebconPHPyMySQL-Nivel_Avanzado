<?php
$img_origen = imagecreatefromjpeg("imágenes/unidad4.jpg");
$alto = 150;
$ancho = 150;
$img_alto = imagesy($img_origen);
$img_ancho = imagesx($img_origen);
$destino_img = imagecreatetruecolor($ancho,$alto);
$img = imagecreate($ancho,$alto);
imagecopyresized($destino_img, $img_origen, 0, 0, 0, 0, $ancho, $alto, imagesx($img_origen), imagesy($img_origen));
imagejpeg($destino_img, "imágenes/unidad4_thumbnail.jpg");
imagedestroy($destino_img);
?>