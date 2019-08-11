<?php

header("Content-type: image/jpeg");

$imagen = imagecreatetruecolor(600,600);

imagecopy($imagen,imagecreatefromjpeg('ralph.jpg'),0,0,0,0,600,600 );

imagefilter($imagen,IMG_FILTER_EDGEDETECT);

//imagejpeg($imagen);
//imagedestroy($imagen);


$imagen2 = imagecreatetruecolor(300,300);
imagecopyresized($imagen2,$imagen,0,0,0,0,300,300,600,600 );
imagejpeg($imagen2);
imagedestroy($imagen2);

?>