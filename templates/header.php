<!DOCTYPE html>
<html>
  <head>
    <title>Can't Forget</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1><a href="index.php">Can't Forget</a></h1>
    </header>
  <!--  <div id="login">
      <form action="signIn.php" method="post">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <div>
          <input type="submit" value="Sign In">
          <a href="signUp.php">Sign Up</a>
        </div>
      </form>
    </div> -->
    <?php include_once('login.php');
    $var = sha1(12345);
    echo $var; ?>

    <section id="images">
    </section>
    <footer>

    </footer>
  </body>
</html>
