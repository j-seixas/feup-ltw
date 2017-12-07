<?php
include_once('includes/init.php');
include_once('database/list.php');

  $lists = getAllLists($_SESSION['userName']);
  echo '<div id=listsDiv>';
  foreach ($lists as $list) {

    echo '<div class="list" id=' . $list['idList'] . '>
    <div class="title">
    <a>' . $list['title'] . '</a>
    </div>';
    $_SESSION['items'] = getAllItems($list['idList']);

    foreach ($_SESSION['items'] as $item) {
      echo '<label> <input type="checkbox" ';
      if($item['complete'])
        echo 'checked';
      echo '> ' . $item["description"] . '</label><br>';
/*      echo '<div class="item">
      <button class="checkItem" type="button"><i class="material-icons">account_circle</i></button>
      <a>' . $item['description'] . '</a>
      <button class="eraseItem" type="button"><i class="material-icons">account_circle</i></button>
      </div>';*/
    }
    echo '</div>';
  }

  echo '</div>';

 ?>
