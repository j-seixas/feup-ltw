<?php

  function signInCorrect($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE userName = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() !== false;
  }

  function dontExist($username){
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE userName = ?');
    $stmt->execute(array($username));
    return $stmt->fetch() == false;
  }

?>
