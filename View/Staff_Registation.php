<!DOCTYPE HTML>
<html>

<head>
  <style>
  .error {
    color: #FF0000;
  }
  </style>
  <style>
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 12px;

  }

  button:hover {
    opacity: 0.8;
  }

  .container {
    padding: 16px;
  }

  body {
    background-image: url("./images/homebg2.jpg");
    background-repeat: no-repeat;
    background-position: right top;

  }

  form {

    position: relative;
    top: 40%;
    left: 50%;
    box-sizing: border-box;
    top: 0;
    left: 0;
    width: 50%;
    height: 50%;
    transform: translate(50%, 30%);


    padding: 48px;
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 16px;
    text-align: left;
    font-family: Source Sans Pro;
    border-radius: 4px;
  }
  </style>
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