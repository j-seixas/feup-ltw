<?php

  function signInCorrect($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE userName = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    if ($user !== false && password_verify($password, $user['password'])) {
      return true;
    }
    return false;
  }

  function dontExist($username){
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE userName = ?');
    $stmt->execute(array($username));
    return $stmt->fetch() == false;
  }

  function registUser($name, $username, $date, $password){
    global $dbh;
    $options = ['cost' => 12];
    $stmt = $dbh->prepare('INSERT INTO users VALUES (?, ?, ?, NULL, ?)');
    $stmt->execute(array($username, $name, $date, password_hash($password, PASSWORD_DEFAULT, $options)));

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
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ? ');
    $stmt->execute(array($username));
    return $stmt->fetch()[$info];
  }

  function changeAbout($username, $about){
    global $dbh;
    $stmt = $dbh->prepare('UPDATE users SET about = ? WHERE userName = ?');
    $stmt->execute(array($about, $username));
  }

?>
