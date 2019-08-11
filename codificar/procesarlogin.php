<?php

if(isset($_POST['usuario']) && isset($_POST['password']) ){

$usuario = $_POST['usuario'];
$password = $_POST['password'];
if(!empty($usuario) && !empty($password)){
    $bd = new SQLite3('login.db');

    $resultado = $bd->query("SELECT * FROM login
                             WHERE usuario='$usuario' AND password='".sha1($password)."';");

    if($fila = $resultado->fetchArray()){
        echo 'existe '.$fila['usuario'];
    }else{
        echo 'no existe';
    }

    $bd->close();


}else
    echo 'llene el form';
}else
    echo 'llene el form';


?>