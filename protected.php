<?php

session_start();
require_once "functions.php";

if (!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}

$permissions = get_user_permissions($_SESSION["role_id"]);

if(in_array("view_profile", $permissions)){
  //para mostrar datos
}else{
  
}

session_destroy();

header("Location: index.php");
exit;