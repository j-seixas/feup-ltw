<?php
include_once('includes/init.php');
include_once('database/list.php');

  $lists = getAllLists($_SESSION['userName']);
  echo '<div id=listsDiv>';
//  echo '<div id=listsInnerDiv>';
  foreach ($lists as $list) {
    echo '<div class="listDiv">';

    echo '<div class="list" id=' . $list['idList'] . '>
    <div class="title">
    <a>' . $list['title'] . '</a>
    </div>';
    $_SESSION['items'] = getAllItems($list['idList']);
    echo '<div class="checkboxes"';

    foreach ($_SESSION['items'] as $item) {
      echo '<label> <input type="checkbox" ';
      if($item['complete'])
        echo 'checked';
      echo '> ' . $item["description"] . '</label><br>';

    }
    echo '</div></div></div>';
  }

  echo '</div>';

 ?>
