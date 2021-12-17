<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="./css_staff/style2.css">
</head>

<body>

  <?php
  require '../Controller/Staff_regCheck.php';
  ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
      <h2>Registration</h2>

      <label for="name"><b>Name</b></label>
      <input type="text" name="name" placeholder="Enter Your Name" required>
      <label for="email"><b>Email</b></label>
      <input type="text" name="email" placeholder="Enter Your Email" required>
      <label for="dob">Birthdate</b></label>
      <input type="date" id="dob" name="dob" required><br><br>
      <label for="password"><b>Password</b></label>
      <input type="text" name="pass" placeholder="Enter Your Password" required>
      Gender:
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="male"> Male
      <input type="radio" name="gender" value="other"> Other
      <span class="error">* <?php echo $genderErr; ?></span>
      <br><br>
      <button type="submit">Register</button>
      <h1>Already have an account?<a href="./Staff_login.php"> Login here.</a></h1>
    </div>
  </form>





</body>

</html>