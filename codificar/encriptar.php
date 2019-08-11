<?php

//$string = "texto a encriptar";
$string = "jocarsa";
echo $string;
echo '<br><br>';
$encriptado1 = md5($string);
echo 'md5: '.$encriptado1;
echo '<br><br>';
$encriptado2 = sha1($string);
echo 'sha1: '.$encriptado2;


?>