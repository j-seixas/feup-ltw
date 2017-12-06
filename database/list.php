<?php

  function getAllLists($username) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists
                           WHERE userName = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }


  function getAllItems($listID) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM items
                           WHERE idList = ?");
    $stmt->execute(array($listID));
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
                           WHERE idList = ? AND userName = ?");
    $stmt->execute(array($id, $userName));
    return $stmt->fetchAll();
  }

?>
