<?php
  include_once('index.php');

  session_destroy();

  header('Location: index.php');
?>
