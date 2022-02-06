<?php
include_once 'header.php';
?>


<title>Login </title>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login-box">
      <h1 class="login-h1">Login</h1>
      <form action="login.inc.php" method="post">
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <input type="submit" value="Log in" />
      </form>
    </div>
    <p class="login-p">
      Not have an account? <a href="signup.php">Sign Up Here</a>
    </p>
  </body>
</html>


    <?php
include_once 'footer.php';
?>
