<?php

$zip = new ZipArchive();

if($zip->open('comprimido.zip', ZipArchive::CREATE) === true){
    //echo 'se pudo abrir el archivo';
    $zip->addFile("prueba.txt","prueba.txt");
    $zip->close();
}else{
    echo 'no se pudo abrir el archivo';
}


?>