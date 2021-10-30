<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <style>
  .error {
    color: #FF0000;
  }
  </style>
</head>

<body>
  <?php
  require '../Controller/Doctor_loginCheck.php';
  ?>


  <h2>Welcome Doctor Please Enter Your Username and Password for log in </h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php if (isset($_COOKIE['name'])) {
                                                  echo $_COOKIE['name'];
                                                } ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>

    Password: <input type="password" name="pass" value="<?php if (isset($_COOKIE['user_pass'])) {
                                                          echo $_COOKIE['user_pass'];
                                                        } ?>">
    <span class="error">* <?php echo $passErr; ?></span>
    <br><br>

    <p><input type="checkbox" name="remember" /> Remember me
    </p>
    <input type="submit" name="submit" value="Submit">
  </form>


  <p>
    <name="Don't Have an account?" /> Don't have an account?
  </p>

  <button><a href="Doctor_registration.php">Registrar hare</a></button><br></br>


  </form>


</body>

</html>