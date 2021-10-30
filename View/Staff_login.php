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
  require '../Controller/Staff_loginCheck.php';
  ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
      <h1>Login Page</h1>
      <label for="email"><b>Email</b></label>
      <input type="text" name="email" placeholder="Enter Your Email" required value="<?php if (isset($_COOKIE['email'])) {
                                                                                        echo $_COOKIE['email'];
                                                                                      } ?>">


      <label for="password"><b>Password</b></label>
      <input type="text" name="pass" placeholder="Enter Your Password" required value="<?php if (isset($_COOKIE['password'])) {
                                                                                          echo $_COOKIE['password'];
                                                                                        } ?>">
      <p><input type="checkbox" name="remember" /> Remember me</p>
      <br><br>

      <button type="submit">Login</button>
      <h1>Don't have an account?<a href="./Staff_Registation.php"> Create here.</a></h1>

    </div>
  </form>






</body>

</html>