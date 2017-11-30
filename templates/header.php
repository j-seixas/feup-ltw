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

    <?php include_once('login.php');
    $var = sha1(12345);
    echo $var; ?>

    <section id="images">
    </section>
    <footer>

    </footer>
  </body>
</html>
