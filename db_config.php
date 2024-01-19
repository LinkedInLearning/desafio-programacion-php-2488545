<?php

$db_host = "localhost";
$db_user = "pgonzalez";
$db_password = "Loquillo47";
$db_name = "mydb";


$db = new mysqli($db_host, $db_user, $db_password, $db_name);

if($db->connect_error){
  die('Error de conexion a la base de datos: '. $db->connect_error);
}