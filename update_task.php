<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $id = $_POST['id'];
  $bool = $_POST['bool'];

  updateTask($id, $bool);

  $var = array('id' => $id, 'bool' => $bool);
  echo json_encode($var);
?>
