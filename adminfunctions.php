<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
approvedClient();
onholdClient();
deleteClient();
deniedClient();
header('Location:admindash.php');
?>