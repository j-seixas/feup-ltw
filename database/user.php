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

  function registUser($name, $username, $date, $password){
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO users VALUES (?, ?, ?, ?)');
    $stmt->execute(array($name, $username, $date, sha1($password)));

  }


  function UserGetInfo($username) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM users
                           WHERE userName = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function getUserInfoByUserName($username,$info){
    if($info == 'password')
        return null;
    global $db;
    $statement = $db->prepare('SELECT * FROM users WHERE username = ? ');
    $statement->execute([$username]);
    return $statement->fetch()[$info];
}
?>
