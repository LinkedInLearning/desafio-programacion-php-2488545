<?php

$username = $_POST["username"];
$password = $_POST["password"];

if(hash("sha512", $password) == $encryptedPasswordFromDB)
{
  session_start();
  $_SESSION["username"] = $username;
  $_SESSION["role_id"] = $role_id_from_database;


  header("Location: protected.php");
  exit;
}else{
  echo "Nombre de Usuario o contrasenha incorrecta";
}