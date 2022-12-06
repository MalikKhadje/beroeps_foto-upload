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

<form action="upload.php" method="post" enctype="multipart/form-data">
<p>Titel Foto</p>
<input type="text" name="titelVeld" required>
<p>Beschrijving</p>
<input type="text" name="beschrijvingVeld" rows="4" cols="25" required>
<input type="file" id="files" multiple="multiple" accept="image/jpeg, image/png, image/jpg">
<output>
<input type="submit" name="submit" value="Upload">
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