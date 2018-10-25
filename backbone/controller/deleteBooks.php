<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$mysqli = new mysqli("localhost", "root", "", "db_library");

if(isset($_POST['id'])){

  $id = intval($_POST['id']);

// main query
$sql = "DELETE FROM  `db_library`.`booktable` WHERE `booktable`.`id` = '". $id ."'";

$result = $mysqli->query($sql);
echo 'deleted';

}

?>