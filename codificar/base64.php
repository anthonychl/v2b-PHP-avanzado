<?php

$string = "texto a codificar";
echo $string;
echo '<br><br>';
$codificado = base64_encode($string);
echo $codificado;
echo '<br><br>';
echo base64_decode($codificado);


?>