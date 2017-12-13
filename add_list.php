<?php
  include_once('includes/init.php');
  include_once('database/list.php');

  $title = $_POST['title'];
  $id = $_POST['id'];
  $userName = $_SESSION['userName'];

  if(preg_match('/[^\w!?" "]/', $title)) {
    $addListTitleError = "Your title cannot contain the symbols, you entered " . $title;
    $title = "";
    echo $addListTitleError;
  }
  else{
    addList($userName,$title);
  }


  $list = getListAfterID($id, $userName);

  if($_POST['tasks'] != ''){

    $tasks = explode(',', $_POST['tasks']);


    foreach ($tasks as $task) {
          if(preg_match('/[^\w!?" "]/', $task)) {
      $addTaskError = "Your task cannot contain the symbols, you entered " . $title;
      $task = "";
      echo $addTaskError;
    }
    else{
      addTask($list['idList'], $task);
    }
    }
  }

  $items = getAllItems($list['idList']);
  $var = array('list' => $list, 'tasks' => $items);
  echo json_encode($var);
?>
