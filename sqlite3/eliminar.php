<?php

$bd = new SQLite3('preguntasyrespuestas.db');

$bd->exec("DELETE FROM pyr WHERE utc='2' ");

$bd->close();


?>