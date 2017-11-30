<script>
  let form = document.getElementById("register");
  form.addEventListener("submit", function(){
    
  })
</script>
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
    <div id="signup">

        <form action="signIn.php" method="post">
          <input type="text" placeholder="Username" name="userName">
          <input type="text" placeholder="Full Name" name="name">
          <input type="password" placeholder="Password" name="password">
          <input type="password" placeholder="Confirm Password" name="cpassword">
          <input type="text" placeholder="Email" name="email">
          <input type="date" name="date">
          <input type="radio" name="gender" id="genderF" value="Female">
          <label for="genderF">Female</label>
          <input type="radio" name="gender" id="genderM" value="Male">
          <label for="genderF">Male</label>

          <div>
            <input type="submit" value="Sign In" id="register">
            <a href="signUp.php">Sign Up</a>
          </div>
        </form>
    </div>


    <section id="images">
    </section>
    <footer>

    </footer>
  </body>
</html>
