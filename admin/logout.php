<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/library/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$user = new Admin();
$user->logout();

Redirect::to('index.php');