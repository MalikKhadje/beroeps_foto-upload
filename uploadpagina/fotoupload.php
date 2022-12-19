<?php
session_start();
if (isset($_SESSION["token"]) && $_SESSION["token"] == $_POST["csrf_token"]) {
    // het token klopt
} else {
    // het token klopt niet
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FotoUpload</title>
    <link rel="stylesheet" href="header.scss">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
<button onclick="myFunction()" id="dark-mode" class="fa fa-moon-o w3-circle"></button>
        <a href="../Home/Home.php" id="logo"><img src="images/logo.png" alt="Logo" width="60"></a>
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
                <a class="nav-item" href="../Home/Home.php">Home</a>
                <a class="nav-item" href="fotoupload.php">Upload</a>
                <a class="nav-item" href="../login/php/logout.php">Log uit</a>
            </nav>
        </div>
    </div>

    <p class="txt" >UPLOADEN</p>
    <img class="arrow" src="images/pijl.png" >


    <form method="post" class="w3-container" enctype="multipart/form-data" action="uploadVerwerk.php">

        <input name="Foto" type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg" hidden>
        <label class="label1" for="files">KIES FOTO</label>
        <p class="txt1" >GEKOZEN AFBEELDING</p>
        <output></output>

        <textarea type="text" name="Titel" placeholder="Titel" required /></textarea><br>
        <textarea type="text" name="Beschrijving" placeholder="Beschrijving..." rows="4" cols="25"
            required /></textarea><br>

        <input type="submit" name="upload" value="Upload Image" id="filesubmit" hidden>
        <label class="label2" for="filesubmit">VERSTUUR FOTO</label>
    </form>




    <script src="upload.js"></script>
</body>

</html>