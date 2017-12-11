<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $id = $_POST['id'];

  eraseTask($id);

  echo json_encode($id);
?>
