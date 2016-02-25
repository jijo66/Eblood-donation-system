<?php

$user_name = "root";
$password = "bullie666";
$database = "blood_don_frm";
$server = "localhost"; 
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);


// some code

?>