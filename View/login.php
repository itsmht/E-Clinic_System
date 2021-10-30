<?php
// Start the session
session_start();
?>

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

  .check-box {
    margin: 10px 0;
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
  require '../Controller/patient_loginCheck.php';
  ?>



  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Login as Patient</h2>
    <label for="">Name:</label>
    <input type="text" name="name" value="<?php if (isset($_COOKIE['name'])) {
                                            echo $_COOKIE['name'];
                                          } ?>">
    <span class="error"> <?php echo $nameErr; ?></span>
    <!-- <br><br> -->
    <label for="">Password:</label>
    <input type="password" name="pass" value="<?php if (isset($_COOKIE['user_pass'])) {
                                                echo $_COOKIE['user_pass'];
                                              } ?>">
    <span class="error"> <?php echo $passErr; ?></span>
    <!-- <br><br> -->

    <p><input class="check-box" type="checkbox" name="remember" /> Remember me
    </p>
    <input class="btn" type="submit" name="submit" value="Submit">
    <div>
      <p>Don't have an account? <a href="./Registration.php">Sign up</a>.</p>
    </div>
  </form>





</body>

</html>