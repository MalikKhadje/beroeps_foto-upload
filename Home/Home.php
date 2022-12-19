<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto Upload</title>

    <!-- links -->
    <link rel="stylesheet" href="Home.scss">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JavaScript -->
    <script src="Home.js" defer></script>
    <link rel="shortcut icon" href="../Home/images/logo.png" type="image/x-icon">
</head>

<body>

    <!--******************** LOGO ********************-->

    <button onclick="myFunction()" id="dark-mode" class="fa fa-moon-o w3-circle"></button>
    <a href="" id="logo"><img src="../Home/images/logo.png" alt="Logo" width="60"></a>


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
                <a class="nav-item" href="">Log uit</a>
            </nav>
        </div>

    </div>


    <!--******************** CAROUSEL ********************-->


    <div class="wrapper">
        <i id="left" class="fa-solid fa fa-arrow-left"></i>
        <div class="carousel"><a href=""></a>
            <img src="https://picsum.photos/400/200" alt="img" draggable="false">
            <img src="https://picsum.photos/500/750" alt="img" draggable="false">
            <?php echo '<img src="data:image;base64,' . base64_encode($item['Foto']) . '" alt="Image">'; ?>
        </div>
        <i id="right" class="fa-solid fa fa-arrow-right"></i>
    </div>

    <!--******************** RECENTE AFBEELDINGEN ********************-->

    <h1 class="w3-container recent-img-titel"><b>RECENTE AFBEELDINGEN </b></h1>

    <div id="recent-img">
        <div class="recent-img-wrap">
            <img src="https://picsum.photos/400/200" alt="img" draggable="false">
            <?php echo '<img src="data:image;base64,' . base64_encode($item['Foto']) . '" alt="Image">'; ?><br>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <a href="" id="caption"></a>
    </div>
</body>

</html>

<?php


$id = $_GET['id'];
// do some validation here to ensure id is safe

$sql = "SELECT Foto FROM Posts WHERE id=$id";
$result = mysqli_query("$sql");
$row = mysqli_fetch_assoc($result);
mysqli_close($link);

header("Content-type: image/jpeg");
echo $row['dvdimage'];
?>