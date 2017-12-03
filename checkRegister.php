<?php
include_once('init.php');
include_once('database/user.php');

$userName = $_POST['userName'];

if( !dontExist($userName)){
  $_SESSION['errorR']='Email already in use!';
header('Location: ' . $_SERVER['HTTP_REFERER']);
} else if( $_POST['password'] != $_POST['cpassword'] ) {
  $_SESSION['errorR']="Passwords don't matcht!";
  header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
  registUser($_POST['name'], $userName, $_POST['date'], $_POST['gender'],
      $_POST['password']);
  if (signInCorrect($userName, $_POST['password'])) {
    setUser($userName);
  }
  if(isset($_SESSION['errorR']))
    unset($_SESSION['errorR']);

  header('Location: index.php');
}


 ?>
