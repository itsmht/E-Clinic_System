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
  require '../Controller/Doctor_regCheck.php';
  ?>


  <h2>Doctor Registration</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Doctor ID: <input type="text" name="dc_id">
    <span class="error">* <?php echo $dc_idErr; ?></span>
    <br><br>
    Experiences: <input type="text" name="exp_in">
    <span class="error">* <?php echo $exp_in; ?></span>
    <br><br>
    Phone Number: <input type="text" name="pn">
    <span class="error">* <?php echo $pnErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Password: <input type="text" name="pass">
    <span class="error">* <?php echo $passErr; ?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>


// ldckanlan

</body>

</html>