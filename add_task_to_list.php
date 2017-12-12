<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $id = $_POST['id'];
  $task = $_POST['task'];


  addTask($id, $task);
  $taskAdded = getTask($id, $task);

  $var = array('id' => $id, 'task' => $taskAdded);
  echo json_encode($var);
?>
