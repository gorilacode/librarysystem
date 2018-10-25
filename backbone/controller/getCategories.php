<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$values = select_all('categories');

$output = '<option value="">~~Select Categories~~</option>';

foreach ($values as $row) {

 $output .='<option value="'.$row['id'].'">'.$row['categoryName'].'</option>';
} 
echo $output;

// echo date("d-m-Y H-i-s");

?>