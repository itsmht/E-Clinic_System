<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="./css-patient/style1.css">
  <script src="https://kit.fontawesome.com/e8af05a135.js" crossorigin="anonymous"></script>
</head>

<body>


  <?php

  require '../Controller/patient_loginCheck.php';
  
  ?>



  <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Login as Patient</h2>
    <label for="">Name:</label>
    <div class="form-control">
      <input type="text" id="uname" name="name" value="<?php if (isset($_COOKIE['name'])) {
                                            echo $_COOKIE['name'];
                                          } ?>">
      <i class="error fas fa-exclamation-circle fa-lg"></i>
      <i class="success fas fa-check-circle fa-lg"></i>
      <p class="err-msg">*username is required</p>

    </div>
    <!-- <br><br> -->
    <label for="">Password:</label>
    <div class="form-control">
      <input type="password" id="pass" name="pass" value="<?php if (isset($_COOKIE['user_pass'])) {
                                                echo $_COOKIE['user_pass'];
                                              } ?>">
      <i class="error fas fa-exclamation-circle fa-lg"></i>
      <i class="success fas fa-check-circle fa-lg"></i>
      <p class="err-msg">*password is required</p>

    </div>
    <!-- <br><br> -->

    <p><input class="check-box" type="checkbox" name="remember" /> Remember me
    </p>
    <input class="btn" type="submit" name="submit" value="Submit">
    <div>
      <p>Don't have an account? <a href="./Registration.php">Sign up</a>.</p>
    </div>
  </form>

  <script src="../Controller/patient_loginChec.js"></script>


</body>

</html>