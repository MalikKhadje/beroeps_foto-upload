<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FotoUpload</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="header.scss">
    <link rel="stylesheet" href="upload.css">
</head>
<?php
// session_start();
// if (isset($_SESSION["token"]) && $_SESSION["token"] == $_POST["csrf_token"]) {
//     // het token klopt
// } else {
//     // het token klopt niet
// }



?>


<body>
    <p>Upload</p>
    <span style="width: 200px; height: 500px;">&#8595;</span>
    <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
        <input name="file" type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg" hidden>
        <label for="files">Kies Image</label>
        <output></output>


<!-- <p>Kies een image</p>
  <input type="file" name="Foto" id="Foto"/><br> -->

    <!-- <br>
    <textarea type="text" name="titelVeld" placeholder="Titel" required></textarea>
    <br>
    <textarea type="text" name="beschrijvingVeld" placeholder="Beschrijving..." rows="4" cols="25" required></textarea>
    <br>
    <input type="submit" name="submit" value="Upload" class="button-9" role="button">
    </form>  -->

    <form method="post" enctype="multipart/form-data" action="uploadVerwerk.php">

        <input name="Foto" type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg" hidden>
        <label for="files">Kies Foto</label>
        <output></output>
        <textarea type="text" name="Titel" placeholder="Titel" required /></textarea><br>
        <textarea type="text" name="Beschrijving" placeholder="Beschrijving..." rows="4" cols="25" required /></textarea><br>

        <input type="submit" name="upload" value="Upload Image" id="filesubmit" hidden>
        <label for="filesubmit">Verstuur Foto</label>
    </form>




    <script src="upload.js"></script>
</body>

</html>

