<?php

  function signInCorrect($username, $password) {
    echo '<h1><a>hey</a></h1>';
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE userName = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() !== false;
  }

?>
