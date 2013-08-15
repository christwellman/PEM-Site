<?php

define('DB_NAME', 'pem');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error())
else ('connected');
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_Name . ': ' . mysql_error());
}

$value = $_POST['input1'];

$sql = "INSERT INTO test (input1) VALUES ('$value')";

if (!mysql_query($sql)) {
	die('error: ' . mysql_error());
}
	
mysql_Close();
?>