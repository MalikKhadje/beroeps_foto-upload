<?php
// Include the database configuration file
// require 'config.php';

// $connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
// $db = mysqli_select_db($connection, 'foto_upload');


// if(isset($POST['upload']))
// {
//     $file = addslashes(file_get_contents($_FILES["Foto"]["tmp_name"]));
//     $Titel = $_POST['Titel'];
//     $Beschrijving = $_POST['Beschrijving'];

//     $query = "INSERT INTO Posts ('Foto', 'Titel', 'Beschrijving') VALUES ('$file', '$Titel', '$Beschrijving')";
    
//     $query_run = mysqli_query($connection,$query);

//     if($query_run)
//     {
//         echo '<script type="text/javascript"> alert("Succesvol geupload") </script>'
//     }
//     else
//     {
//         echo '<script type="text/javascript"> alert("OnSuccesvol geupload") </script>'
//     }
// }






$connect = mysqli_connect("localhost", "foto_upload", "foto_upload", "foto_upload");  
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
if(isset($_POST["upload"]))  
{  
     $file = addslashes(file_get_contents($_FILES["Foto"]["tmp_name"]));  
     $Titel = $_POST['Titel'];
     $Beschrijving = $_POST['Beschrijving'];

     $query = "INSERT INTO Posts(Foto, Titel, Beschrijving) VALUES ('$file', '$Titel', '$Beschrijving')";  
     if(mysqli_query($connect, $query))  
     {  
          echo '<script>alert("Inserted into Database")</script>';  
     }  
     else{
        echo '<script>alert("NOT Inserted into Database")</script>'; 
     }
    }


include "redirect_form.php";
    


























// if(isset($_POST['upload'])){
//     $foto = addslashes(file_get_contents($_FILES["Foto"]["tmp_name"]));
//     $titel = $_POST['Titel'];
//     $beschrijving = $_POST['Beschrijving'];

//     $query = "INSERT INTO `Posts`(`Foto`,`Titel`,`Beschrijving`) VALUES ('$foto','$titel','$beschrijving')";

//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         echo '<script type="text/javascript">alert("Alles is geupload")</script>';
//     }
//     else{
//         echo '<script type="text/javascript">alert("Upload is verkeerd gegaan")</script>';
//     }

// }




// if (isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] == "https://87268.stu.sd-lab.nl/beroeps_foto-upload/uploadpagina/fotoupload.php") {
//     // afzender klopt
//     // echo "De afzender klopt<br/><br/>";


//     if (isset($_POST["Foto"]) && 
//         $_POST["Foto"] != '' &&

//         isset($_POST["Titel"]) &&
//         $_POST["Titel"] != '' &&

//         isset($_POST["Beschrijving"]) &&
//         $_POST["Beschrijving"] != '' 
//         ) {
         
//             if (isset($_POST['upload'])) {
//                 //lees alle velden uit en stop de waarden in de variabelen
//                 $foto = $_POST['Foto'];
//                 $titel = $_POST['Titel'];
//                 $beschrijving = $_POST['Beschrijving'];
//                 // $eind = $_POST['einddatumVeld'];
//                 // $prior = $_POST['prioriteitVeld'];
//                 // $stat = $_POST['statusVeld'];
//                 // $userID = $_POST['id'];
//                 $query = "INSERT INTO Posts";
//                 $query .= "(Foto, Titel, Beschrijving)";
//                 $query .= " VALUES ('{$foto}', '{$titel}', '{$beschrijving}'";


//                 // Voer de query uit en vang het resultaat op
//                 $result = mysqli_query($mysqli, $query);

//                 // controleer of het is gelukt
//                 if ($result) {
//                     echo "Het item is toegevoegd<br/>";
//                 } 
//                 else {
//                     echo "FOUT bij toegevoegen<br/>";
//                     echo $query . "<br/>"; // tijdelijk de query tonen
//                     echo mysqli_error($mysqli); // tijdelijk de foutmelding tonen
//                 }
//             } 
//             else {
//                 //als het formulier niet goed verstuurd is
//                 echo "Het formulier is niet (goed) verstuurd<br/>";
//             }
//     } 
//     else {
//         // niet het juiste formulier
//         echo "Het juiste formulier is niet ontvangen, vul alle velden in!<br/>";
//     }
// } 
// else {
//     // de afzender klopt niet
//     echo "De afzender klopt niet<br/>";
// }

// // terug naar het overzicht
// echo "<a href='toonagenda.php'>OVERZICHT</a>";








 
       
    
  
