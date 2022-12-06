<?php
session_start();

// als je niet bent ingelogd
if (!isset($_SESSION['username'])) 
{
    header("location:../html/login.html");
    exit;
}
?>