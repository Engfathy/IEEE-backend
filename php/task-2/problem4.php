<?php
/*
"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"
*/

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SystemRoot'];
echo "<br>";
$config = openssl_get_cert_locations();
print_r($config["ini_cafile"]);