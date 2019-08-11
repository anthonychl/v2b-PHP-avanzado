<?php

$exp = "/^[a-z0-9]+([.][a-z0-9]+)*[@]+[a-z0-9]+[.]+[a-z]{2,4}$/i" ;
$email = "anthony.chaple.123@domain.com" ;

if(preg_match($exp,$email) )
echo "es un email";
else
echo "no es un email";


?>