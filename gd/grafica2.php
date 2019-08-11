<?php
header("Content-type: image/jpeg");

$y = 300;
$imagen = imagecreatetruecolor(600,$y);

$gris = imagecolorallocate($imagen,225,225,225);
imagefilltoborder($imagen,0,0,$gris,$gris);

$rojo = imagecolorallocate($imagen,225,0,0);

$x=10;
$x2 = 20;
for($i=0;$i<10;$i++){
    $data = rand(10,270);
    imagefilledrectangle($imagen,$x,$y-20,$x2,($y-20-$data),$rojo);
    $x = $x+15;
    $x2 = $x2 + 15;
}



imagejpeg($imagen);

//libera el resource de la memoria despues d cargarlo en la pagina
//no lo borra de la pagina
imagedestroy($imagen);
?>