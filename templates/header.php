<!DOCTYPE html>
<html>
  <head>
    <title>Best To Do Lists</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>You Gotta Do Whatchu' Gotta Do</h1>
    </header>
    <nav>
      <?php
        if (isset($_SESSION['username'])) 
          include ('templates/logout_form.php');
        else    
          include ('templates/login_form.php');
      ?>

      <ul>
        <?php if (!isset($_SESSION['username'])) { ?>
          <li><a href="register.php">Register</a></li>
        <?php } ?>
      </ul>
    </nav>
