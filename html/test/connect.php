<?php

$host = Yaconf::get("mysql.host"); #'10.10.10.1:3306';
$user = Yaconf::get("mysql.user");
$pass = Yaconf::get("mysql.password");

$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
 
echo 'Successful database connection!'.PHP_EOL;
