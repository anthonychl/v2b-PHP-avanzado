<?php

$zip = new ZipArchive();

if($zip->open('comprimido.zip', ZipArchive::CREATE) === true){
    //echo 'se pudo abrir el archivo';
    $zip->extractTo('directorio_de_prueba');
    $zip->close();
}else{
    echo 'no se pudo abrir el archivo';
}


?>