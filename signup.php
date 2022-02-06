<?php
include_once 'header.php';
?>

<title>Sign Up</title>
    </div>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4> </h4>
      <form action="signup.inc.php" method="post">
        <label>First Name</label>
        <input type="text" placeholder="" />
        <label>Last Name</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <label>Confirm Password</label>
        <input type="password" placeholder="" />
        <input type="submit" value="Sign up">
      </form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>

    <?php
include_once 'footer.php';
?>
