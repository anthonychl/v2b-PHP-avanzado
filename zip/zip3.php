<?php

$zip = new ZipArchive();

if($zip->open('comprimido.zip', ZipArchive::CREATE) === true){
    //echo 'se pudo abrir el archivo';
    $zip->addFile("DSC_9140.JPG","DSC_9140.JPG");
    $zip->addFile("DSC_9153.JPG","DSC_9153.JPG");
    $zip->addFile("DSC_9180.JPG","DSC_9180.JPG");
    $zip->addFile("DSC_9253.JPG","DSC_9253.JPG");
    $zip->close();
}else{
    echo 'no se pudo abrir el archivo';
}


?>