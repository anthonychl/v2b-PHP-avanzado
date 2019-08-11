<?php

$url = "blah.com";  //not valid
echo filter_var($url,FILTER_VALIDATE_URL);
echo '<br><br>';

$url2 = "blah.com"; //not valid
echo filter_var($url2,FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED);
echo '<br><br>';
$url21 = "http://www.blah.com"; //valid
echo filter_var($url21,FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED);
echo '<br><br>';

$url3 = "blah.com"; //not valid
echo filter_var($url3,FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED);
echo '<br><br>';
$url31 = "http://www.blah.com"; //valid
echo filter_var($url31,FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED);
echo '<br><br>';

$url4 = "blah.com"; //not valid
echo filter_var($url4,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED);
echo '<br><br>';
$url41 = "http://www.blah.com/blog"; //valid
echo filter_var($url41,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED);
echo '<br><br>';

$url5 = "blah.com"; //not valid
echo filter_var($url5,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED);
echo '<br><br>';
$url51 = "http://www.blah.com/index.php?text=blah"; //valid
echo filter_var($url51,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED);
echo '<br><br>';



?>