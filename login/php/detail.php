<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/script.js" defer></script>
    <title>Detail</title>

</head>

<button onclick="myFunction()" id="dark-mode" class="fa fa-moon-o w3-circle"></button>
        <a href="" id="logo"><img src="../images/logo.png" alt="Logo" width="60"></a>
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
                <a class="nav-item" href="">Home</a>
                <a class="nav-item" href="">Upload</a>
                <a class="nav-item" href="logout.php">Log uit</a>
            </nav>
        </div>
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
<div class="container2">

<div class="titel2">
    <?php echo $item['Titel'] . "<br/>"; ?>
</div>

<div id="foto" class="foto">
    <?php echo '<img src="data:image;base64,' . base64_encode($item['Foto']) . '" alt="Image">'; ?><br>
</div>

<div class="beschrijving">
    <?php echo $item['Beschrijving'] . "<br/>"; ?>
</div>

<div class="datum">
    <?php echo $item['Aangemaakt_op'] . "<br/>"; ?>
</div>
<br><br>
<div class="wrap">
    <a href="poep.php"><input type="submit" class="terug-knop" value="TERUG"></a>
</div>

</div>
<?php
}

// als er niks gevonden is
else {
    echo "Er is geen record met ID: " . $id . "<br/>";
}

    ?>