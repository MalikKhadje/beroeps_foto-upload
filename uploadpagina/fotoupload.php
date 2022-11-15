<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FotoUpload</title>
</head>
<body>
    
<form action="upload.php" method="post" enctype="multipart/form-data">
    Selecteer uw foto's
    <input type="file" name="files[]" multiple >
    <input type="submit" name="submit" value="UPLOAD">
</form>

<div class="gallery">
    <div class="gcon" >
        <?php
        $sql = "SELECT * FROM Posts ORDER BY ID DESC ";
        $query = $db->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = 'uploads/'.$row["file_name"];
               ?>
               <img src="<?php echo $imageURL; ?>" alt="" />
               <?php
            }
        }else{
            echo '';   
        }
        ?>

</div>

</body>
</html>