<?php

$ip = "192.168.1.115";  //valid
echo filter_var($ip,FILTER_VALIDATE_IP);
echo '<br><br>';

$ip = "192.168.1.259";  //not valid # cant be > 255
echo filter_var($ip,FILTER_VALIDATE_IP);
echo '<br><br>';

//validar si la IP esta en el fotmato IPv4
$ip = "192.168.1.2";  //valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);
echo '<br><br>';

//validar si la IP esta en el fotmato IPv6
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";  //valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6);
echo '<br><br>';

//validar q la IP no sea de rango privado (red local)
$ip = "192.168.1.259";  //not valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE);
echo '<br><br>';
$ip = "83.44.1.25";  //valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE);
echo '<br><br>';

//validar q la IP no sea de rango reservado
$ip = "0.0.0.0";  //not valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_RES_RANGE);
echo '<br><br>';
$ip = "127.0.0.1";  //not valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_RES_RANGE);
echo '<br><br>';
$ip = "192.168.0.1";  //valid
echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_RES_RANGE);
echo '<br><br>';




?>