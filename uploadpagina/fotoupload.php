<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FotoUpload</title>
</head>

<body>
    <div class="container">
        <div class="upfrm">
            <?php if (!empty($statusMsg)) { ?>
            <p class="status-msg">
                <?php echo $statusMsg; ?>
            </p>
            <?php } ?>

            <form action="uploadverwerk.php" method="post" enctype="multipart/form-data">
                Select Image Files to Upload:
                <input type="file" name="files[]" multiple>
                <input type="submit" name="submit" value="UPLOAD">
            </form>
        </div>
        <div class="gallery">
            <div class="gcon">
                <?php
                // Include the database configuration file
                include_once 'config.php';

                // Get images from the database
                $query = $db->query("SELECT * FROM images ORDER BY id DESC");

                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
                        $imageURL = 'uploads/' . $row["file_name"];
                ?>
                <img src="<?php echo $imageURL; ?>" alt="" />
                <?php }
                } else { ?>
                <p>No image(s) found...</p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>