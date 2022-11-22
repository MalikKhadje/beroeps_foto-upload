<?php  

$sname = "localhost";
$uname = "foto_upload";
$password = "foto_upload";

$db_name = "foto_upload";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}