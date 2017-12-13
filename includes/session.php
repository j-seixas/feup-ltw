<?php
  session_start();
  session_regenerate_id(true);
  
  function setUser($username) {
    $_SESSION['userName'] = $username;
  }


?>
