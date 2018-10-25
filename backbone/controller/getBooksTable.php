<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  $variable = select_all_reverse('booktable');

  $count = row_count('booktable');

  foreach ($variable as $row) {
    $json[] = [
      "id"                	=> $row["id"],
      "bookTitle"         	=> $row["bookTitle"],
      "category"          	=> select_particular2("categories", "categoryName", "id",$row["category"]),
      "isbn"         	  	=> $row["isbn"],
      "level"         		=> select_particular2("level", "levels", "id",$row["level"]),
      "department"          => select_particular2("department", "departmentName", "id",$row["department"]),
      "year"         	  	=> $row["year"],
      "dateAdded"         	=> $row["dateAdded"],
      "author"         		=> $row["author"]
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


$data['count'] = $count;


echo json_encode($data);




?>