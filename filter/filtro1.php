<?php

$email = "blah@@blah.com";

echo filter_var($email,FILTER_VALIDATE_EMAIL);

echo '<br><br>';

if (filter_var($email,FILTER_VALIDATE_EMAIL))
echo 'es un email';
else
echo 'no es un email';

?>