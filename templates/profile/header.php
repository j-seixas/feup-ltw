<?php
  include_once('database/user.php');

  $fullName = getUserInfoByUserName($_SESSION['userName'], 'name');
  $birthDate = getUserInfoByUserName($_SESSION['userName'], 'birthDate');
  $about = getUserInfoByUserName($_SESSION['userName'], 'about');
  $srcPhoto = 'resources/images/userPhotos/thumbs_medium/photo' . $_SESSION['userName'] . '.jpg';
  if(!file_exists($srcPhoto))
    $srcPhoto = 'resources/images/userPhotos/thumbs_medium/default.jpg';
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>To-Do Master</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/mainStyle.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="javascript/scriptProfile.js" defer></script>
    </head>
    <body>
      <header>
        <span class="buttonsLeft">
          <button id="lists" class="buttonIcons" type="button"><i class="material-icons">assignment</i></button>
        </span>
        <span class="buttonsRight">
          <button id="logout" class="buttonIcons" type="button"><i class="material-icons">exit_to_app</i></button>
        </span>
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
