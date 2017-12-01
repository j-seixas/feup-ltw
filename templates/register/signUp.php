<div id="signup">

    <form name="registerForm" action="index.php" method="post" onSubmit="return submitList()">
      <input type="text" placeholder="Username" name="userName" required>
      <input type="text" placeholder="Email" name="email" required>
      <input type="text" placeholder="Name" name="name" required>
      <input type="password" placeholder="Password" name="password" required>
      <input type="password" placeholder="Confirm Password" name="cpassword" required>
      <input type="date" name="date" required>
      <input type="radio" name="gender" id="genderF" value="Female" required>
      <label for="genderF">Female</label>
      <input type="radio" name="gender" id="genderM" value="Male">
      <label for="genderF">Male</label>

      <div>
        <input type="submit" value="Sign In" id="register">
        <a href="signUp.php">Sign Up</a>
      </div>
    </form>
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
