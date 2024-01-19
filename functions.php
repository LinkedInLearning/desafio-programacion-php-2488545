<?php 

require_once "db_config.php";

function get_user_permissions($role_id){
  global $db;

  $query = "SELECT p.permission_name
            FROM role_permissions rp
            INNER JOIN permissions p ON rp.permission_id = p.permission_id
            WHERE rp.role_id = ?";
  
  if($stmt = $db->prepare($query)) {
    $stmt->bind_param("i", $role_id);
    $stmt->execute();


    $result = $stmt->get_result();
    $permissions = array();

    while($row = $result->fetch_assoc()){
        $permissions[] = $row['permission_name'];
    }

    $stmt->close();
  }else{
    echo "Error al consultar los permisos: ". $db->error;
  }

  return $permissions;
}