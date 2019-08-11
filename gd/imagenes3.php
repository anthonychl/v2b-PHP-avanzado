<?php

header("Content-type: image/jpeg");

$imagen = imagecreatetruecolor(600,600);
imagecopy($imagen,imagecreatefromjpeg('ralph.jpg'),0,0,0,0,600,600 );


$rojo = imagecolorallocate($imagen,255,0,0);
$string  = 'WRECK IT RALPH';
imagestring($imagen,18,10,10,$string,$rojo );

imagejpeg($imagen,NULL,100);
imagedestroy($imagen);



?>