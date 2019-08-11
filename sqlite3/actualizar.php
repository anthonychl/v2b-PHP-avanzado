<?php


$bd = new SQLite3('preguntasyrespuestas.db');

$bd->exec("UPDATE pyr SET ip = 'localhost'");

$bd->close();


?>