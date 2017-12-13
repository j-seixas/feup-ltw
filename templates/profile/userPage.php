<?php

  if(isset($_SESSION['userName'])){
    include_once('templates/profile/header.php');
    include_once('templates/profile/bio.php');
    include_once('templates/common/footer.php');
  } else
      header('Location: index.php');
?>
