<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$path = "htdocs/library/";

if ($_FILES["img_file"]["name"] != '') {
	$test = explode(".", $_FILES["img_file"]["name"]);
	$extension = end($test);
	$name = $_FILES["img_file"]["name"];
	$location = ROOT_PATH ."upload/images/".$name;
	move_uploaded_file($_FILES["img_file"]["tmp_name"], $location);
	echo "<img src='".BASE_URL."upload/images/".$name."' height='150' width='225' class='img-thumbnail'>";
}

?>