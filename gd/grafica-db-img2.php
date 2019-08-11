<?php
header("Content-type: image/png");

$y = 300;
$imagen = imagecreatetruecolor(600,$y);

imagecopy($imagen,imagecreatefrompng('fondo.png'),0,0,0,0,600,300);

$bd = new SQLite3('grafica.db');
$resultado = $bd->query("SELECT * FROM grafica;");

$rojo = imagecolorallocate($imagen,225,0,0);
$azul = imagecolorallocate($imagen,0,0,255);
$font = 'ParryHotter.ttf';
$x=60;
$x2 = 70;
while($rs = $resultado->fetchArray()){
    imagefilledrectangle($imagen,$x,$y-50,$x2,($y-50-$rs['valores']),$rojo);
    imagettftext($imagen,6,-45,$x,$y-30,$azul,$font,$rs['meses']);

    $x = $x+15;
    $x2 = $x2 + 15;
}

imagepng($imagen);
imagedestroy($imagen);

?>