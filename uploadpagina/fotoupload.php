<?php
require 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FotoUpload</title>
    <link rel="stylesheet" href="header.scss">
    <link rel="stylesheet" href="upload.css">
</head>

<body>
    <p>Upload</p>
    <span style="width: 200px; height: 500px;">&#8595;</span>
    <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
        <input name="file" type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg" hidden>
        <label for="files">Kies Image</label>
        <output></output>




        <br>
        <textarea type="text" name="titelVeld" placeholder="Titel" required></textarea>
        <br>
        <textarea type="text" name="beschrijvingVeld" placeholder="Beschrijving..." rows="4" cols="25"
            required></textarea>
        <br>
        <input type="submit" name="submit" value="Upload" class="button-9" role="button">
    </form> -->

  <form action="upload.php" method="POST" enctype="multipart/form-data">


  <input name="Foto" type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg" hidden>
        <label for="files">Kies Image</label>
        <output></output>

  <!-- <p>Kies een image</p>
  <input type="file" name="Foto" id="Foto"/><br> -->

  <p>Kies een image</p>
  <input type="text" name="Titel" placeholder="Titel" required/><br>

  <p>Kies een image</p>
  <input type="text" name="Beschrijving" placeholder="Beschrijving..." rows="4" cols="25" required/><br>

 <input type="submit" name="upload" value="Upload Image/Data"/>
</form>

    <script>
        document.querySelector("#files").addEventListener("change", (e) => {
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                const files = e.target.files;
                const output = document.querySelector("output");
                output.innerHTML = "";
                for (let i = 0; i < files.length; i++) {
                    if (!files[i].type.match("image")) continue;
                    const imgReader = new FileReader();
                    imgReader.addEventListener("load", function (event) {
                        const imgFile = event.target;
                        const img = document.createElement("img");
                        img.className = "thumbnail"
                        img.src = imgFile.result
                        output.appendChild(img);
                    });
                    imgReader.readAsDataURL(files[i]);
                }
            } else {
                alert("Your browser does not support File API");
            }
        });
    </script>




</body>

</html>

