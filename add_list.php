<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $title = $_POST['title'];
  $id = $_POST['id'];
  $userName = $_SESSION['userName'];
  addList($userName,$title);

//  $id = getListIDwithTitle($title, $userName);
  $lists = getListsAfterID($id, $userName);
  echo json_encode($lists);
?>
