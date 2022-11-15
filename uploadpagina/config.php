<?php

ini_set('display_errors', 1 );
error_reporting(E_ALL);

// Database configuration
$db_hostname = "localhost";
$db_username = "foto_upload";
$db_password = "foto_upload";
$db_database = "foto_upload";


$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);


if (!$mysqli) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
}

else{
    echo "Verbinding met " . $db_database . " is gemaakt!<br/>";
}

?>
