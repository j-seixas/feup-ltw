<div id="login">
  <?php if (isset($_SESSION['userName']) && $_SESSION['userName'] != '') { ?>
    <form action="signOut.php" method="post">
      <a href="index.php"><?=$_SESSION['userName']?></a>
      <input type="submit" value="Logout">
    </form>
  <?php } else { ?>
    <form action="signIn.php" method="post">
      <input type="text" placeholder="Username" name="userName">
      <input type="password" placeholder="Password" name="password">
      <div>
        <input type="submit" value="Sign In">
        <a href="signUp.php">Sign Up</a>
      </div>
    </form>
  <?php } ?>
</div>
<?php $var = sha1(12345);
echo $var; ?>
