<?php
// Database configuration
$dbHost     = "127.0.0.1";
$dbUsername = "foto_upload";
$dbPassword = "foto_upload";
$dbName     = "foto_upload";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
