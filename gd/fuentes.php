<?php

header("Content-type: image/png");

$imagen = imagecreatetruecolor(600,600);

$gris = imagecolorallocate($imagen,225,225,225);
imagefilltoborder($imagen,0,0,$gris,$gris);

$rojo = imagecolorallocate($imagen,255,0,0);

$string  = 'Harry Potter';
$font = 'ParryHotter.ttf';

imagettftext($imagen,50,0,100,150,$rojo,$font,$string);

imagepng($imagen);
imagedestroy($imagen);
?>