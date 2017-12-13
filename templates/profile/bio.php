<?php
  include_once('database/user.php');

  $fullName = getUserInfoByUserName($_SESSION['userName'], 'name');
  $birthDate = getUserInfoByUserName($_SESSION['userName'], 'birthDate');
  $about = getUserInfoByUserName($_SESSION['userName'], 'about');
  $srcPhoto = 'resources/images/userPhotos/thumbs_medium/photo' . $_SESSION['userName'] . '.jpg';
  if(!file_exists($srcPhoto))
    $srcPhoto = 'resources/images/userPhotos/thumbs_medium/default.jpg';
?>

<div id='bioContainer'>

  <div id='allUserInfo'>

    <div id='userInfo'>
      <div id='imgBio'>
        <img class='profileImg' src="<?php echo $srcPhoto ?>">
        <form class="uploadPhotoProfile" action="uploadPhoto.php" method="post"
        enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" value="Select image to upload:"><br>
        <input type="submit" value="Upload Image" name="submit">
      </form>
      </div>

      <div id='bio'>
        <div class='bioDivs'>
          <a> Email: </a> <a><?php echo $_SESSION['userName']; ?></a>
        </div>
        <div class='bioDivs'>
          <a> Name: </a> <a><?php echo $fullName;?></a>
        </div>
        <div class='bioDivs'>
          <a> Birth Date: </a> <a><?php echo $birthDate;?></a>
        </div>
      </div>
    </div>

    <div class='bioDivs' id='about'>
      <a> About: </a><a><?php echo $about;?></a>
    </div>
  </div>

</div>
</body>
