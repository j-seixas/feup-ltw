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
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ? ');
    $stmt->execute(array($username));
    return $stmt->fetch()[$info];
}

function uploadUserPhoto($username){
  global $dbh;
  $idPhoto = 'photo'. getUserInfoByUserName($username,'photoID') . '.jpg';
  $stmt = $dbh->prepare('UPDATE users SET photoID = ? WHERE username = ?');
  $stmt->execute(array($idPhoto,$username));
  return $stmt->errorCode();
}

function getUserPhoto($username){
  global $dbh;
  $stmt = $dbh->prepare('SELECT photoID FROM users WHERE username = ?');
  $stmt->execute(array($username));
  return $stmt->fetch()['photoID'];
}
?>
