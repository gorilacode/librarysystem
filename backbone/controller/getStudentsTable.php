<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  $variable = select_all_reverse('studentrecord');

  $count = row_count('studentrecord');

  foreach ($variable as $row) {
    $json[] = [
      "id"                => $row["id"],
      "firstName"         => $row["firstName"],
      "lastName"          => $row["lastName"],
      "matricNo"          => $row["matricNo"],
      "email"         	 	=> $row["email"],
      "phoneNo"        		=> $row["phoneNo"],
      "department"        => select_particular2("department", "departmentName", "id",$row["department"]),
      "course"       	  	=> $row["course"],
      "school"          	=> $row["school"],
      "level"         		=> select_particular2("level", "levels", "id",$row["level"])
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


$data['count'] = $count;


echo json_encode($data);




?>