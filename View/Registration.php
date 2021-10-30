<!DOCTYPE HTML>
<html>

<head>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }


  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  h2 {
    text-align: center;
    padding-bottom: 20px;
  }

  label {
    padding: 15px 0 5px 0;
  }

  input {
    padding: 5px;
  }

  .btn {
    padding: 10px;
    margin-top: 15px;
    margin-bottom: 20px;
    background-color: #E54754;
    color: #fff;
    border: none;
    cursor: pointer;
  }

  .error {
    color: #FF0000;
  }

  .radio {
    margin-right: 5px;
  }


  form {
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    justify-content: center;
    max-width: 500px;
    height: 800px;
    margin: auto;
  }
  </style>
</head>

<body>

  <?php

  require '../Controller/patient_regCheck.php';

  ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Registration</h2>
    <label for="">Name:</label>
    <input type="text" name="name">
    <span class="error"> <?php echo $nameErr; ?></span>
    <!-- <br><br> -->
    <label for="">E-mail:</label>
    <input type="email" name="email">
    <span class="error"> <?php echo $emailErr; ?></span>
    <!-- <br><br> -->
    <label for="">Password:</label>
    <input type="password" name="pass">
    <span class="error"> <?php echo $passErr; ?></span>
    <!-- <br><br> -->
    <label for="">Address:</label>
    <input type="text" name="address">
    <span class="error"> <?php echo $addressErr; ?></span>
    <!-- <br><br> -->
    <label for="">Date of Birth:</label>
    <input type="date" name="dob">
    <span class="error"> <?php echo $dobErr; ?></span>
    <!-- <br><br> -->
    <label for=""> Gender:</label>
    <div>
      <input class="radio" type="radio" name="gender" value="female">Female
      <input class="radio" type="radio" name="gender" value="male">Male
      <input class="radio" type="radio" name="gender" value="other">Other
    </div>
    <span class="error"> <?php echo $genderErr; ?></span>
    <!-- <br><br> -->
    <input class="btn" type="submit" name="submit" value="Submit">

    <div>
      <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
    </div>
  </form>





</body>

</html>