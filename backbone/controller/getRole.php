<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$values = select_all('role');

$output = '<option value="">~~Select Role~~</option>';

foreach ($values as $row) {

 $output .='<option value="'.$row['id'].'">'.$row['roleName'].'</option>';
} 
echo $output;

?>