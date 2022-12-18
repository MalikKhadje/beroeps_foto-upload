<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    
    <title>Detail</title>

</head>

<div id="logo">
        <img src="../images/logo.png" class="logo" alt="">
    </div>
<h1 class="titel">DETAILS</h1>

<?php

// voeg de database verbinding toe
require_once 'session.inc.php';
require 'config.php';

$id = $_GET['id'];

// // toon het id op het scherm
// echo "ID van het agenda-item is: " . $id . "<br/>";

// maak de query om gegevens van het item op te halen
$query = "SELECT * FROM Posts WHERE ID = " . $id;

// voer de query uit
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    // er hoeft maar 1 item uitgelezen te worden
    $item = mysqli_fetch_assoc($result);

    echo '<img src="data:image;base64,'.base64_encode($item['Foto']).'" alt="Image" style="width: 400px; height: 400px;">';?><br><?php
    echo $item['Titel'] . "<br/>";
    echo $item['Beschrijving'] . "<br/>";
    echo $item['Aangemaakt_op'] . "<br/>";
}

// als er niks gevonden is
else
{
    echo "Er is geen record met ID: " . $id . "<br/>";
}

echo "<a href='logout.php'>LOG UIT</a>";
?>