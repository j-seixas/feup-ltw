<?php
include_once('includes/init.php');
include_once('database/list.php');

  $lists = getAllLists($_SESSION['userName']);
  echo '<div id=listsDiv>';

  foreach ($lists as $list) {
    echo '<div class="listDiv">';

    echo '<div class="list" id=' . $list['idList'] . '>
    <div class="title">
    <p>' . $list['title'] . '</p> <button class="delete"><i class="material-icons">delete</i></button>
    </div>';
    echo '<div class="checkboxes">';
    $_SESSION['items'] = getAllItems($list['idList']);

    foreach ($_SESSION['items'] as $item) {
      echo '<div class="task" id="task' . $item["idItem"] . '">';
      if($item['complete']){
        echo '<button class="checkedButton" type="button"><i class="material-icons">check_box</i><p>'
        . $item["description"] . '</p></button>
        <button class="erase"><i class="material-icons">close</i></button>';
      } else {
        echo '<button class="uncheckedButton" type="button"><i class="material-icons">check_box_outline_blank</i><p>'
        . $item["description"] . '</p></button>
        <button class="erase"><i class="material-icons">close</i></button>';
      }

      echo '</div>';

    }
    echo '</div></div></div>';
  }

  echo '</div>';

 ?>
