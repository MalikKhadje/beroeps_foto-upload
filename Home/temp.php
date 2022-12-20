<?php

    $connection = mysqli_connect("localhost", "foto_upload", "foto_upload");
    $db = mysqli_select_db($connection, 'foto_upload');

    $query = " SELECT * FROM `Posts` ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
    ?>
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <?php echo '<a href="../login/php/detail.php?id=' . $row['ID'] . '" id="caption">Meer info</a>' ?>
    <!-- <img class="modal-content" id="img01"> -->
    <img src="data:image;base64, <?php echo base64_encode($row['Foto']); ?>" alt="Image" draggable="false">
    <?php echo '<a href="../login/php/detail.php?id=' . $row['ID'] . '">Meer info</a>' ?>
</div>
<?php
    }
    ?>

    <!-- js -->
    // Get the modal
let modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption


const images = document.getElementsByTagName('img');

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.id;
    });
}

let modalImg = document.getElementById("img01");
let captionText = document.getElementById("caption");
images.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
