<?php
include_once('includes/init.php');
include_once('database/user.php');
// If the user didn't come from a valid page.

$id = getUserInfoByUserName($_SESSION['userName'],'userName');
$photo_name = 'photo'.$id.'.jpg';
$target_dir = "resources/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$photo_name);
}

uploadUserPhoto($_SESSION['userName']);
header('Location: profile.php');
?>
