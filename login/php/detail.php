<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/detail.css">
    <title>Detail</title>

</head>

<?php

// voeg de database verbinding toe
require_once 'session.inc.php';
require 'config.php';

$id = $_GET['ID'];

// toon het id op het scherm
echo "ID van het agenda-item is: " . $id . "<br/>";

// maak de query om gegevens van het item op te halen
$query = "SELECT * FROM Posts WHERE ID = " . $id;

// voer de query uit
$connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
$db = mysqli_select_db($connection, 'foto_upload');

$query = " SELECT * FROM `Posts` ";
$query_run = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($query_run))
{
    ?>
   
        <?php echo '<img src="data:image;base64,'.base64_encode($row['Foto']).'" alt="Image" style="width: 100px; height: 100px" >'; ?><br>
        <?php echo $row['Titel'] ?> <br>
        <?php echo $row['Beschrijving'] ?> <br>
        <?php echo $row['Aangemaakt_op'] ?> <br>
   
    <?php
}

echo "<a href='logout.php'>LOG UIT</a>";
?>