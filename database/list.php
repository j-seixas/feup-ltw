<?php

  function getUserLists($username) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists JOIN
                                users USING (idUser)
                           WHERE idUser = ?
                           ORDER BY lists.id DESC");
    $stmt->execute(array($username));
    return $stmt->fetch();
  }


  function getUserListsByCategory($username,$cateogry) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists JOIN
                          users USING (userName)
                           WHERE userName = ? AND
                           WHERE category = ?
                           ORDER BY lists.id DESC");
  $stmt->execute(array($username, $category));
  return $stmt->fetch();
  }

?>
