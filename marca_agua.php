<?php
$imagen = "imágenes/pexels-cottonbro-studio.jpg";
$watermark = "imágenes/marca.png";

$img1 = imagecreatefrompng($watermark);
$extract = substr($imagen, -3);
$extract = strtolower($extract);

switch ($extract) {
    case 'png':
        $img2 = imagecreatefrompng($imagen);
        break;
    
    case 'jpg':
        $img2 = imagecreatefromjpeg($imagen);
        break;
    
    case 'gif':
        $img2 = imagecreatefromgif($imagen);
        break;
}

imagecopy($img2, $img1, (imagesx($img2)/201), (imagesy($img2)/201), (imagesx($img1)/201), (imagesy($img1)/201), imagesx($img1), imagesy($img1));
header("Content-type: image/jpeg");
imagejpeg($img2);
imagedestroy($img1);
imagedestroy($img2);
?>