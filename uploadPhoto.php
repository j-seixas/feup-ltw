<?php
  phpinfo();
  include_once('includes/init.php');
  include_once('database/user.php');


  $photo_name = 'photo'.$_SESSION['userName'].'.jpg';
  $target_dir = "resources/images/userPhotos/";

  // Generate filenames for original and medium files
  $originalFileName = $target_dir . "originals/" . $photo_name;
  $mediumFileName = $target_dir . "thumbs_medium/" . $photo_name;

  $uploadOk = 1;
  $imageFileType = pathinfo($target_dir . "originals/" . basename($_FILES["fileToUpload"]["name"]) ,PATHINFO_EXTENSION);

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
  if (file_exists($originalFileName)) {
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 1) {
    // Move the uploaded file to its final destination
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $originalFileName);

    // Create an image representation of the original image
    switch ($imageFileType) {
      case 'jpg':
        $original = imagecreatefromjpeg($originalFileName);
        break;
      case 'png':
        $original = imagecreatefrompng($originalFileName);
        break;
      case 'jpeg':
        $original = imagecreatefromjpeg($originalFileName);
        break;
    }

    $width = imagesx($original);     // width of the original image
    $height = imagesy($original);    // height of the original image
    $square = min($width, $height);  // size length of the maximum square

    // Calculate width and height of medium sized image (max width: 400)
    $mediumwidth = $width;
    $mediumheight = $height;
    if ($mediumwidth > 300) {
      $mediumwidth = 300;
      $mediumheight = $mediumheight * ( $mediumwidth / $width );
    }

    // Create and save a medium image
    $medium = imagecreatetruecolor($mediumwidth, $mediumheight);
    imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);
    imagejpeg($medium, $mediumFileName);

  }

  uploadUserPhoto($_SESSION['userName']);
  header('Location: profile.php');
?>
