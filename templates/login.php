<div id="login">
  <div class="form">

    <?php if (isset($_SESSION['userName']) && $_SESSION['userName'] != '') { ?>
      <form action="signOut.php" method="post">
        <a href="index.php"><?=$_SESSION['userName']?></a>
        <input type="submit" value="Logout">
      </form>
    <?php } else { ?>
      <form action="signIn.php" method="post">
        <div id="signIn">
          <input type="email" placeholder="Username" name="userName"><br>
          <input type="password" placeholder="Password" name="password"><br>
          <input type="submit" value="Sign In">
        </div>
        <div>
          <a href="signUp.php">Sign Up</a>
        </div>
      </form>
    <?php } ?>
  </div>
</div>
<?php $var = sha1(12345);
echo $var; ?>
