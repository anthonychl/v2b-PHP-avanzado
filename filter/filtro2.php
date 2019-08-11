<?php

$email = "blah!!!!@blah.com";

echo "la cadena original es :".$email."<br> y la saneada :";
echo filter_var($email,FILTER_SANITIZE_EMAIL); // no funciona, ??? :(



?>