<?php
include_once('init.php');
include_once('database/user.php');

  if (signInCorrect($_POST['userName'], $_POST['password'])) {
    echo '<h1><a>Aaaa</a></h1>';
    setUser($_POST['userName']);
  }

  header('Location: index.php');
?>
