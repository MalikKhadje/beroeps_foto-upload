<?php

require_once 'session.inc.php';
require 'config.php';

$query = "SELECT * FROM Posts";

?>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Overzicht</title>

</head> 

<h1>OVERZICHT</h1>

<center>
    <form action="" method="post" enctype="multipart/form-data">
        <table width="50%" cellpadding="5" cellspacing="5" border="1">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Titel</th>
                    <th>Beschrijving</th>
                    <th>Aangemaakt Op</th>
                </tr>
            </thead>
            <?php
            $connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
            $db = mysqli_select_db($connection, 'foto_upload');

            $query = " SELECT * FROM `Posts` ";
            $query_run = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100px; height: 100px" >'; ?> </td>
                    <td> <?php echo $row['Titel'] ?> </td>
                    <td> <?php echo $row['Beschrijving'] ?> </td>
                    <td> <?php echo $row['Aangemaakt_op'] ?> </td>
                    <td> <?php echo '<a href="detail.php?id=' . $row['ID'] . '">Detail</a>' ?>  </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</center>


<?php



echo "<a href='logout.php'>LOG UIT</a>";


?>













