<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts/Bevan/Bevan-Regular.ttf" , "CERTIFICADO");
imagettftext($image, 32, 0, 390, 350, $titleColor, "fonts/Playball/Playball-Regular.ttf" , "Alan Carlos");
imagestring($image, 3, 412, 370, utf8_decode("Concluído em: ".date("d/m/Y")), $titleColor);

header("content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);