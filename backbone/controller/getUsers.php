<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  $variable = select_all_reverse('userstable');

  $count = row_count('userstable');

  foreach ($variable as $row) {
    $json[] = [
      "id"                	=> $row["id"],
      "firstName"         	=> $row["firstName"],
      "lastName"            => $row["lastName"],
      "userName"            => $row["userName"],
      "userRole"          	=> select_particular2("role", "roleName", "id",$row["userRole"]),
      "status"         	  	=> $row["status"]
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


$data['count'] = $count;


echo json_encode($data);




?>