<?php

$zip = new ZipArchive();

if($zip->open('comprimido.zip', ZipArchive::CREATE) === true){
    $zip->deleteName("DSC_9140.JPG");
    $zip->close();
}else{
    echo 'no se pudo abrir el archivo';
}


?>