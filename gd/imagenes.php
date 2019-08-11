<?php

header("Content-type: image/jpeg");

$imagen = imagecreatetruecolor(600,600);

imagecopy($imagen,imagecreatefromjpeg('ralph.jpg'),0,0,0,0,600,600 );

//imagefilter($imagen,IMG_FILTER_GRAYSCALE);
//imagefilter($imagen,IMG_FILTER_NEGATE);
imagefilter($imagen,IMG_FILTER_BRIGHTNESS,10);
imagefilter($imagen,IMG_FILTER_CONTRAST,-5);
imagefilter($imagen,IMG_FILTER_GAUSSIAN_BLUR);
//imagefilter($imagen,IMG_FILTER_EMBOSS);
imagefilter($imagen,IMG_FILTER_EDGEDETECT);


imagejpeg($imagen);
imagedestroy($imagen);
?>