<?php

// Database configuration
$dbHost = "localhost";
$dbUsername = "foto_upload";
$dbPassword = "foto_upload";
$dbName = "foto_upload";


$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);


// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
