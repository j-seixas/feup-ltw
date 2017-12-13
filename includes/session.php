<?php
  session_start();
  session_regenerate_id(true);

  function setUser($username) {
    $_SESSION['userName'] = $username;
  }

  function getErrorLogs() {
     if (isset($_SESSION['errorR']))
       return $_SESSION['errorR'];
     else
       return '';
   }


   function clearMessages() {
     $_SESSION['errorR'] = '';
   }

?>
