<?php
  include_once('includes/init.php');
  include_once('database/user.php');
  $title = "Welcome";      // Set the title
  $username = $_SESSION['userName'];
  $fullName = getUserInfoByUserName($username, 'name');
  $date = getUserInfoByUserName($username, 'birthDate');
?>

<div>
    <div id="showUsername">
        <a> Email: <?php echo $_SESSION['userName']; ?></a>
    </div>
    <div id="Name">
        <a> Name: <?php echo $fullName;?></a>
    </div>
</div>
