<?php //login.php
$db_hostname = 'localhost';
$db_database = 'PEM';
$db_username = 'root';
$db_password = 'DY$on007';

// Connect to server.
$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}

// Select the database. 
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    die ('Can\'t use database : ' . mysqli_error());
}
?>