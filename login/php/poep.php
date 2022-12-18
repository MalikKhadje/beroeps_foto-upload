<?php

require_once 'session.inc.php';
require 'config.php';

$query = "SELECT * FROM Posts";

?>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/overzicht.css">
    <link rel="stylesheet" href="./fonts/icomoon/style.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css"> -->
<!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <title>Overzicht</title>

</head> 

<h1>OVERZICHT</h1>


<?php


$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    // maak een tabel aan
    echo "<table border='1px' class='table table-striped custom-table'>";

    // eerste de headers van de tabel
    echo "<tr>
    <th>Foto</th>
    <th>Titel</th>
    <th>Beschrijving</th>
    <th>Aangemaakt Op</th>
    </tr>";

    while ($item = mysqli_fetch_assoc($result))

    {
      ?>
        <?php
        // toon de gegevens van het item in een tabelrij
        echo "<tr>";
             echo "<td>" . $item['Foto'] . "</td>";
             echo "<td>" . $item['Titel'] . "</td>";
             echo "<td>" . $item['Beschrijving'] . "</td>";
             echo "<td>" . $item['Aangemaakt_op'] . "</td>";
             echo "<td>" . "<a href='detail.php?id=" . $item['ID'] . "'>Detail</a> </td>";
        echo "</tr>";
        ?>
        <?php
    }

    // sluit de tabel af
    echo "</table>";
}

$result = mysqli_query($mysqli, $query);

if (!$result)
// laat de records zien
{
    echo "<p>FOUT!</p>";
    echo "<p>" . $query ."</p>";
    echo "<p>" . mysqli_error($mysqli) . "</p>";
    exit;
}

// else
// // als er geen records zijn
// {
//     echo "<p>Geen items gevonden!</p>";
    
// }

echo "<a href='logout.php'>LOG UIT</a>";


?>









