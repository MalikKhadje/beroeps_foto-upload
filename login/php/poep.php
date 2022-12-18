<?php

require_once 'session.inc.php';
require 'config.php';

$query = "SELECT * FROM crud_agenda WHERE userID=".$_SESSION["id"];

?>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/overzicht.css">
    <link rel="stylesheet" href="./fonts/icomoon/style.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <title>Overzicht</title>

</head> 

<h1>OVERZICHT</h1>
<header id="header" class="animated">
<nav class="navMenu animated">
<ul class="linksMenu">
</ul>
</nav>
</div>
</header>
<div class="container">
<div class="form-group">
    <input type="text" id="myInput" placeholder="Zoek..." class="form-control">
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
        let value =$(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

<?php


$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    // maak een tabel aan
    echo "<table border='1px' class='table table-striped custom-table'>";

    // eerste de headers van de tabel
    echo "<tr>
    <th>Onderwerp</th>
    <th>Inhoud</th>
    <th>Begindatum</th>
    <th>Einddatum</th>
    <th>Prioriteit</th>
    <th>Status</th>
    <th>CheckID</th>
    <th>Verwijder</th>
    <th>Pas Aan</th>
    </tr>";

    while ($item = mysqli_fetch_assoc($result))

    {
      ?>
      <tbody id="myTable">
        <?php
        // toon de gegevens van het item in een tabelrij
        echo "<tr>";
             echo "<td>" . $item['Onderwerp'] . "</td>";
             echo "<td>" . $item['Inhoud'] . "</td>";
             echo "<td>" . $item['Begindatum'] . "</td>";
             echo "<td>" . $item['Einddatum'] . "</td>";
             echo "<td>" . $item['Prioriteit'] . "</td>";
             echo "<td>" . $item['Status'] . "</td>";
             echo "<td>" . "<a href='detail.php?id=" . $item['ID'] . "'>Detail</a> </td>";
        echo "</tr>";
        ?>
        </tbody>
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









