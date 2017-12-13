<?php
  include_once('database/user.php');

  $fullName = getUserInfoByUserName($_SESSION['userName'], 'name');
  $birthDate = getUserInfoByUserName($_SESSION['userName'], 'birthDate');
  $photoUser = getUserInfoByUserName($_SESSION['userName'], 'photoID');
  $gender = getUserInfoByUserName($_SESSION['userName'], 'gender');
  $about = getUserInfoByUserName($_SESSION['userName'], 'about');
  $srcPhoto = 'resources/images/userPhotos/thumbs_medium/photo' . $_SESSION['userName'] . '.jpg';//$photoUser;
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>To-Do Master</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/mainStyle.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
      <header>

      </header>
    <div id='userInfo'>
    <div id="showUsername">
        <a> Email: <?php echo $_SESSION['userName']; ?></a>
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
                <form class="uploadPhotoProfile" action="uploadPhoto.php" method="post"
                      enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload" value="Select image to upload:"><br>
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>

    </body>
