<?php

$zip = new ZipArchive();

if($zip->open('comprimido.zip') === true){
    echo 'se pudo abrir el archivo';
}else{
    echo 'no se pudo abrir el archivo';
}


?>