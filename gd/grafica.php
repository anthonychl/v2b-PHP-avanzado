<?php
header("Content-type: image/jpeg");

/* se puede escribir asi pero el autocompletado lo pone todo en minusculas
$imagen = imageCreateTrueColor(400,400);
imageJPEG($imagen);
en el curso beginner php tambien sale con minusculas
*/

$imagen = imagecreatetruecolor(400,400);

$gris = imagecolorallocate($imagen,225,225,225);
imagefilltoborder($imagen,0,0,$gris,$gris);

$rojo = imagecolorallocate($imagen,225,0,0);
imagefilledrectangle($imagen,10,10,200,180,$rojo);
imagefilledellipse($imagen,250,250,100,50,$rojo);


imagejpeg($imagen);

//libera el resource de la memoria despues d cargarlo en la pagina
//no lo borra de la pagina
imagedestroy($imagen);
?>