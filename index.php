<?php
  include_once('init.php');

  if(isset($_SESSION['userName']) && $_SESSION['userName']!=''){
    include_once('templates/mainPage.php');
  } else {
    include_once('templates/header.php');
    include_once('templates/login.php');
    include_once('templates/footer.php');
  }
?>
