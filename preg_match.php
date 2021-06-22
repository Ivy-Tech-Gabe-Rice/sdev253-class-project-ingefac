<?php 
$url = "http://www.sdev253.net/home.html";
$parse = parse_url($url); 
$host = $parse['host'];
$host = str_ireplace('www.', '',$host);
echo"Domain name is: $host";
?>
