<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/detail.css">

    <title>Detail</title>

</head>

<div id="logo">
    <img src="../images/logo.png" class="logo" alt="">
</div>
<h1 class="titel">LOGIN</h1>

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

if (mysqli_num_rows($result) > 0) {
    // er hoeft maar 1 item uitgelezen te worden
    $item = mysqli_fetch_assoc($result);
?>
<div class="container">

<div class="titel2">
    <?php echo $item['Titel'] . "<br/>"; ?>
</div>

<div class="foto">
    <?php echo '<img src="data:image;base64,' . base64_encode($item['Foto']) . '" alt="Image">'; ?><br>
</div>

<div class="beschrijving">
    <?php echo $item['Beschrijving'] . "<br/>"; ?>
</div>

<div class="datum">
    <?php echo $item['Aangemaakt_op'] . "<br/>"; ?>
</div>
</div>
<?php
}

// als er niks gevonden is
else {
    echo "Er is geen record met ID: " . $id . "<br/>";
}

echo "<a href='logout.php'>LOG UIT</a>";
    ?>