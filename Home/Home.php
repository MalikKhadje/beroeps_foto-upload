<?php

require_once 'session.inc.php';
require 'config.php';

$query = "SELECT * FROM Posts";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- links -->
    <link rel="stylesheet" href="Home.scss">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JavaScript -->
    <script src="Home.js" defer></script>
    <link rel="shortcut icon" href="../Home/images/logo.png" type="image/x-icon">
</head>

<body>

    <!--******************** LOGO ********************-->

    <button onclick="myFunction()" id="dark-mode" class="fa fa-moon-o w3-circle"></button>
    <a href="../Home/Home.php" id="logo" class="fa fa-camera" style="font-size: 50px; color: #003559;"><!--<img src="../Home/images/logo.png" alt="Logo" width="60">--></a>


    <!--******************** MENU ********************-->


    <div class="container">
        <!-- This checkbox will give us the toggle behavior, it will be hidden, but functional -->
        <input id="toggle" type="checkbox">
        <!-- IMPORTANT: Any element that we want to modify when the checkbox state changes go here, being "sibling" of the checkbox element -->

        <!-- This label is tied to the checkbox, and it will contain the toggle "buttons" -->
        <label class="toggle-container" for="toggle">
            <!-- If menu is open, it will be the "X" icon, otherwise just a clickable area behind the hamburger menu icon -->
            <span class="button button-toggle"></span>
        </label>

        <!-- The nav menu -->
        <div id="nav-center">
            <nav class="nav">
                <a class="nav-item" href="../Home/Home.php">Home</a>
                <a class="nav-item" href="../uploadpagina/fotoupload.php">Upload</a>
                <a class="nav-item" href="../login/php/logout.php">Log uit</a>
            </nav>
        </div>

    </div>


    <!--******************** CAROUSEL ********************-->




    <div class="wrapper">
        <i id="left" class="fa-solid fa fa-arrow-left"></i>
        <div class="carousel"><a href="#"></a>
            <?php

            $connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
            $db = mysqli_select_db($connection, 'foto_upload');


            $query = "SELECT * FROM Posts";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <img src="data:image;base64, <?php echo base64_encode($row['Foto']); ?>" alt="" draggable="false">
            <?php
            }
            ?>
        </div>
        <i id="right" class="fa-solid fa fa-arrow-right"></i>
    </div>

    <!--******************** RECENTE AFBEELDINGEN ********************-->

    <h1 class="w3-container recent-img-titel"><b>RECENTE AFBEELDINGEN </b></h1>

    <div id="recent-img">
        <div class="recent-img-wrap">
            <?php

            $connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
            $db = mysqli_select_db($connection, 'foto_upload');

            $query = " SELECT * FROM Posts ORDER BY Aangemaakt_op DESC";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <img src="data:image;base64, <?php echo base64_encode($row['Foto']); ?>" alt="Image" draggable="false">
            <?php
            }
            ?>
        </div>
    </div>


    <?php

    $connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
    $db = mysqli_select_db($connection, 'foto_upload');

    $query = " SELECT * FROM `Posts` ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
    ?>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <?php echo '<a href="../login/php/detail.php?id=' . $row['ID'] . '">Meer info</a>' ?>
    </div>
    <?php
    }
    ?>

</body>

</html>

<?php



?>