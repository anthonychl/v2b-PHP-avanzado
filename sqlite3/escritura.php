<?php

$bd = new SQLite3('preguntasyrespuestas.db');

$bd->exec("INSERT INTO pyr VALUES('2','Cual es el color calido?',
            'Rojo','127.0.0.1')");



$bd->close();
?>