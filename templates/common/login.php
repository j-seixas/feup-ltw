<div id="login">
  <div class="form">

    <form action="signIn.php" method="post">
      <section id="errorMessages">
        <?php if(isset($_SESSION['errorR']) && $_SESSION['errorR'] != '') { ?>
          <div class="error">
            <p><?php $_SESSION['errorR'] ?></p>
          </div>

          <?php $_SESSION['errorR'] = ''; } ?>
        </section>
      <div id="signIn">
        <input type="email" placeholder="Username" name="userName"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" value="Sign In">
      </div>
      <div>
        <p class="text">
          Don't have an account? <a href="signUp.php">Sign Up</a>
        </p>
      </div>
    </form>
  </div>
</div>
