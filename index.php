<?php
  include_once('includes/init.php');

  if(isset($_SESSION['userName']) && $_SESSION['userName']!=''){
    include_once('templates/mainPage/mainPage.php');
  } else {
    include_once('templates/common/header.php');
    include_once('templates/common/login.php');
    include_once('templates/common/footer.php');
  }
?>
