<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<table border=1>
<?php

$bd = new SQLite3('preguntasyrespuestas.db');

$resultado = $bd->query("SELECT * FROM pyr;");

/*
//si el campo imagen es texto con el nombre d la imagen
while( $fila = $resultado->fetchArray()){
    echo "<tr><td>".$fila['pregunta']."</td>
          <td>".$fila['respuesta']."</td>
          <td><img src='imagenes/".$fila['imagen']."' width=200px></td></tr>";
}
*/

//si el campo imagen contiene el archivo dentro d la base de datos
while( $fila = $resultado->fetchArray()){
    echo "<tr><td>".$fila['pregunta']."</td>
          <td>".$fila['respuesta']."</td>
          <td><img src='".$fila['imagen']."' width=200px></td></tr>";
}

$bd->close();


?>
</table>
</body>

</html>


