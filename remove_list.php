<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $id = $_POST['id'];

  eraseAllTasks($id);
  eraseList($id);
  
  echo json_encode($id);
?>
