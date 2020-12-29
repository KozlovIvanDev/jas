<?php
$databaseHost = 'localhost';
$databaseName = 'userlistdb';
$databaseUsername = 'root';
$databasePassword = '';
global $mysqli;
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>