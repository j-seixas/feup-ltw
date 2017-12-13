<?php
  include_once('includes/init.php');
  include_once('database/user.php');

  $userName = $_POST['userName'];
  $password = $_POST['password'];
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);


  if( !dontExist($userName)){
    $_SESSION['errorR'] = 'Email already in use!';
    header('Location: ' . $_SERVER['HTTP_REFERER']);

  } else if( $_POST['password'] != $_POST['cpassword'] ) {
    $_SESSION['errorR'] = "Passwords don't matcht!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

  } else if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
    $_SESSION['errorR']="Passwords doesnt have enough characters, or a number, or an uppercase or a lowercase";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

  } else {
    registUser($_POST['name'], $userName, $_POST['date'], $_POST['password']);
    if (signInCorrect($userName, $_POST['password'])) {
      setUser($userName);
      if(isset($_SESSION['errorR']))
      unset($_SESSION['errorR']);
    }

    header('Location: index.php');
  }


 ?>
