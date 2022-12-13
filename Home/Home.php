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
    <!-- JavaScript -->
    <script src="Home.js"></script>
</head>

<body>

    <!--******************** LOGO ********************-->


    <a href="" id="logo"><img src="../Home/images/logo.png" alt="LOGO" width="60"></a>


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
        <nav class="nav">
            <a class="nav-item" href="">Home</a>
            <a class="nav-item" href="">Upload</a>
            <a class="nav-item" href="">Log uit</a>
        </nav>
    </div>


    <!--******************** CAROUSEL ********************-->


    <div class="slider">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">

        <div class="testimonials">
            <label class="item" for="t-1">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua,
                    retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-2">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua,
                    retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-3">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua,
                    retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-4">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua,
                    retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-5">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua,
                    retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
        </div>

        <div class="dots">
            <label for="t-1"></label>
            <label for="t-2"></label>
            <label for="t-3"></label>
            <label for="t-4"></label>
            <label for="t-5"></label>
        </div>
    </div>


    <!--******************** RECENTE AFBEELDINGEN ********************-->


</body>

</html>

<?php

echo("hello")

?>