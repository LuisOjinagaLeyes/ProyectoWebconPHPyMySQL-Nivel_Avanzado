<?php
session_start();
header("Content-type: image/jpeg");

$Captcha_img = imagecreate(100,50);
imagecolorallocate($Captcha_img, 162, 14, 5);

$color_txt = imagecolorallocate($Captcha_img, 160, 189, 147);

imagestring($Captcha_img, 25, 20, 15, $_SESSION['captcha'], $color_txt);

imagejpeg($Captcha_img);
?>