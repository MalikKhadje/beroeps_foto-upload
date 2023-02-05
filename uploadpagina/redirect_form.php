<?php
if(isset($_POST['upload'])){
// Fetching variables of the form which travels in URL
$file = addslashes(file_get_contents($_FILES["Foto"]["tmp_name"]));  
$Titel = $_POST['Titel'];
$Beschrijving = $_POST['Beschrijving'];

if($file !=''&& $Titel !=''&& $Beschrijving !='')
{
//  To redirect form on a particular page
header("Location: fotoupload.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>
