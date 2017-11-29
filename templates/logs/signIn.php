<?php
echo '<h1><a>Ups</a></h1>';
include_once('init.php');
echo '<h1><a>Ups1</a></h1>';
include_once('../../database/user.php');
echo '<h1><a>Ups</a></h1>';
  if (signInCorrect($_POST['userName'], $_POST['password'])) {
    echo '<h1><a>Aaaa</a></h1>';
    setUser($_POST['userName']);
  }
echo '<h1><a>Ei</a></h1>';
  header('Location: ../header.php');
?>
