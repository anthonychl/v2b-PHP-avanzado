<?php

if( preg_match("/video3brain/","esto es un curso de video2brain"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

//modificador: i , para q no sea case sensitive
if( preg_match("/Video2Brain/i","esto es un curso de video2brain"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

/*modificador: \b , para q no busque en parte d una palabra sino la palabra sola
i.e.:
video  - en -  Esto es un video    devuelve 1
compara - en - Son incomparables   devuelve 0, aunque este dentro: in'compara'bles

*/
if( preg_match("/\bvideo/i","esto es un curso de video"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

//modificador: ^ , buscar al principio d la cadena
if( preg_match("/^video2brain/","esto es un curso de video2brain"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

//modificador: $ , buscar al final d la cadena
if( preg_match("/video2brain$/","esto es un curso de video2brain"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

//modificador: [] , intervalo
if( preg_match("/video[1-5]brain/","esto es un curso de video2brain"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

//modificador: + numeroArepetir {vecesArepetir1, vecesArepetir2} + , intervalo
if( preg_match("/video+2{1,3}+brain/","esto es un curso de video2brain"))
echo "existe coincidencia";
else
echo "no existe coincidencia";

echo "<br><br>";

?>
