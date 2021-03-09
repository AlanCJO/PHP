<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Alan Carlos", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/Y")), $titleColor);

header("content-type: image/jpeg");

imagejpeg($image, "Certificado-".date("Y-m-d").".jpg", 10);

imagedestroy($image);