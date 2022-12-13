<?php
// Include the database configuration file
include 'config.php';



if(isset($_POST['upload'])){
    $foto = addslashes(file_get_contents($_FILES["Foto"]["tmp_name"]));
    $titel = $_POST['Titel'];
    $beschrijving = $_POST['Beschrijving'];

    $query = "INSERT INTO `Posts`(`Foto`,`Titel`,`Beschrijving`) VALUES ('$foto','$titel','$beschrijving')";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript">alert("Alles is geupload")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Upload is verkeerd gegaan")</script>';
    }

}


?>


 
       
    
  
