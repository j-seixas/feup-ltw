<?php
session_start();
$db = new PDO('sqlite:database/todolist.db'); 
include_once('database/user.php');

$username = $_SESSION['userName'];
$fullName = getUserInfoByUserName($username, 'name');
$birthDate = getUserInfoByUserName($username, 'birthDate');
$photoUser = getUserInfoByUserName($username, 'photoID');
$gender = getUserInfoByUserName($username, 'gender');
$about = getUserInfoByUserName($username, 'about');
$srcPhoto = 'resources/images/' . $photoUser;
?>
<!DOCTYPE html>
<html>
<head>
<title>To-Do Master</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/mainStyle.css">
</head>
<div id='userInfo'>
    <div id="showUsername">
        <a> Email: <?php echo $username; ?></a>
    </div>
    <div id="Name">
        <a> Name: <?php echo $fullName;?></a>
    </div>
    <div id="birthDate">
        <a> Birth Date: <?php echo $birthDate;?></a>
    </div>
    <div id="gender">
        <a> Gender: <?php echo $gender;?></a>
    </div>
    <div id="birthDate">
        <a> About: <?php echo $about;?></a>
    </div>
    <img class="img-item" src="<?php echo $srcPhoto ?>"><br>
                <form class="uploadPhotoProfile" action="database/uploadPhoto.php" method="post"
                      enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload" value="Select image to upload:"><br>
                    <input type="submit" value="Upload Image" name="submit">
                </form>
</div>
