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

// $id = $_GET['id'];

// toon het id op het scherm
echo "ID van het agenda-item is: " . $id . "<br/>";

// maak de query om gegevens van het item op te halen
$query = "SELECT * FROM users WHERE ID = " . $id;

// voer de query uit
$result = mysqli_query($mysqli, $query);

// if (mysqli_num_rows($result) > 0)
// {
//     // er hoeft maar 1 item uitgelezen te worden
//     $item = mysqli_fetch_assoc($result);

//     echo $item['Onderwerp'] . "<br/>";
//     echo $item['Inhoud'] . "<br/>";
//     echo $item['Begindatum'] . "<br/>";
//     echo $item['Einddatum'] . "<br/>";
//     echo $item['Prioriteit'] . "<br/>";
//     echo $item['Status'] . "<br/>";
// }

// // als er niks gevonden is
// else
// {
//     echO "Er is geen record met ID: " . $id . "<br/>";
// }

echo "<a href='logout.php'>LOG UIT</a>";
?>