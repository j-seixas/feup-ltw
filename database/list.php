<?php
  /***** LISTS *****/
  function getAllLists($username) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists
                           WHERE userName = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }



  function getListIDwithTitle($title, $userName) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT idList
                           FROM lists
                           WHERE title = ? AND userName = ?");
    $stmt->execute(array($title, $userName));
    return $stmt->fetch();
  }

  function getListsAfterID($id, $userName) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists
                           WHERE idList > ? AND userName = ?");
    $stmt->execute(array($id, $userName));
    return $stmt->fetchAll();
  }

  function getListAfterID($id, $userName) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists
                           WHERE idList > ? AND userName = ?");
    $stmt->execute(array($id, $userName));
    return $stmt->fetch();
  }


  function addList($username, $title){
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO lists VALUES (NULL, ?, ?)');
    $stmt->execute(array($username, $title));
  }

  function eraseList($id){
    global $dbh;
    $stmt = $dbh->prepare('DELETE FROM lists WHERE idList = ?');
    $stmt->execute(array($id));
  }

    /***** TASKS *****/

  function addTask($listID, $task){
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO items VALUES (NULL, ?, 0, ?)');
    $stmt->execute(array($listID, $task));
  }

  function getAllItems($listID) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                          FROM items
                          WHERE idList = ?");
    $stmt->execute(array($listID));
    return $stmt->fetchAll();
  }

  function eraseTask($id){
    global $dbh;
    $stmt = $dbh->prepare('DELETE FROM items WHERE idItem = ?');
    $stmt->execute(array($id));
  }

  function eraseAllTasks($idList){
    global $dbh;
    $stmt = $dbh->prepare('DELETE FROM items WHERE idList = ?');
    $stmt->execute(array($idList));
  }

  function updateTask($id, $bool){
    global $dbh;
    $stmt = $dbh->prepare('UPDATE items SET complete = ? WHERE idItem = ?');
    $stmt->execute(array($bool, $id));
  }

?>
