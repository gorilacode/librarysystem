<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  $variable = select_all_reverse('booktable');

  $count = row_count('booktable');

  foreach ($variable as $row) {
    $json[] = [
      "id"                	=> $row["id"],
      "bookTitle"         	=> $row["bookTitle"],
      "imgFileName"           => BASE_URL."upload/images/".$row["imgFileName"],
      // "category"          	=> $row["category"],
      // "isbn"         	  	=> $row["isbn"],
      // "level"         		=> $row["level"],
      // "department"          => $row["department"],
      // "fileName"            => $row["fileName"],
      // "imgFileName"         => $row["imgFileName"],
      // "bookDescription"     => $row["bookDescription"],
      // "year"         	  	=> $row["year"],
      // "dateAdded"         	=> $row["dateAdded"],
      "author"         		=> $row["author"]
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


$data['count'] = $count;


echo json_encode($data);




?>