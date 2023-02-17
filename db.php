<?php
$server ='localhost';
$username = 'fabian';
$password = '12345678';
$database = 'php_login_database';

try{
$conexion = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
}catch(PDOException $e){
die('Connected failed: '.$e->getMessage());
}


?>