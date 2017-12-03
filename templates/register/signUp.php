<div id="signup">
  <div class="form">
    <form name="registerForm" action="checkRegister.php" method="post" onSubmit="return submitList()">
      <div id="register">
        <input type="email" placeholder="Email" name="userName" required><br>
        <input type="text" placeholder="Name" name="name" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <input type="password" placeholder="Confirm Password" name="cpassword" required><br>
        <input type="date" name="date" required><br>
        <input type="submit" value="Sign Up" id="register">
      </div>
      <div>
        <p class="text">
          Already have an account? <a href="index.php">Sign In</a>
        </p>
      </div>
    </form>
  </div>
  <script>
  function submitList(){
    console.log("submiting");

    if(document.forms["registerForm"]["password"].value == document.forms["registerForm"]["cpassword"].value )
    console.log("here");
    else {
      console.log("dif");
      return false;
    }
    return true;
  }
  </script>
</div>
