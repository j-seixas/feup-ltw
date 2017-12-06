<?php
  include_once('database/connection.php');
  include_once('database/list.php');


  $title = $_POST['title'];
  $userName = $_SESSION['userName'];

  addList($title, $userName);

  $id = getListIDwithTitle($title, $userName);
  $lists = getListsAfterID($id, $userName);
  echo json_encode($lists);
?>
