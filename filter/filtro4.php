<?php

$msg = "tengo un problema en php, me dice 'Error 404' ";
echo filter_var($msg,FILTER_SANITIZE_MAGIC_QUOTES);
echo '<br><br>';

var_dump(filter_var($msg,FILTER_SANITIZE_MAGIC_QUOTES)) ;


?>