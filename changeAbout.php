<?php
  include_once('includes/init.php');
  include_once('database/user.php');

  changeAbout($_SESSION['userName'], $_POST['about']);

  header('Location: profile.php');

 ?>
