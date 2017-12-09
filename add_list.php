<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $title = $_POST['title'];
  $id = $_POST['id'];
  $tasks = explode(',', $_POST['tasks']);
  $userName = $_SESSION['userName'];

  addList($userName,$title);
  $list = getListAfterID($id, $userName);

  foreach ($tasks as $task) {
    addTask($list['idList'], $task);
  }

  $items = getAllItems($list['idList']);
  $var = array('list' => $list, 'tasks' => $items);
  echo json_encode($var);
?>
