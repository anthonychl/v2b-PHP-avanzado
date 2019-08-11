<?php
header("Content-type: image/jpeg");

$y = 300;
$imagen = imagecreatetruecolor(600,$y);

$gris = imagecolorallocate($imagen,225,225,225);
imagefilltoborder($imagen,0,0,$gris,$gris);
$rojo = imagecolorallocate($imagen,225,0,0);


$bd = new SQLite3('grafica.db');
$resultado = $bd->query("SELECT * FROM grafica;");

$x=10;
$x2 = 20;
while($rs = $resultado->fetchArray()){
    imagefilledrectangle($imagen,$x,$y-20,$x2,($y-20-$rs['valores']),$rojo);
    $x = $x+15;
    $x2 = $x2 + 15;
}



imagejpeg($imagen);

imagedestroy($imagen);

?>