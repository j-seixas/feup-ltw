<?php

function connect(){
  try{
    return new PDO('sqlite:database/todolist.db'); 
  }catch(Exception $e){
      var_dump($e);
  }
}

$dbh=connect();
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
  $dbh = new PDO('sqlite:database/todolist.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  */
?>
