<?php
session_start();
$dbHost = 'localhost';
$dbName = 'content';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>