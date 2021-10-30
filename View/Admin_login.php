<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>E-Clinic System</title>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  h1 {
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
  <h1>E-Clinic System</h1><br>

  <?php
  require '../Controller/Admin_loginCheck.php';
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div>
      <table>
        <tr>
          <td><label for="email"><b>UserName</b></label></td>
          <td>

            <input type="text" name="Uname" placeholder="Enter Your Username" required value="<?php if (isset($_COOKIE['Uname'])) {
                                                                                                echo $_COOKIE['Uname'];
                                                                                              } ?>">
          </td>
        </tr>
        <tr>
          <td><label for="pass"><b>Password</b></label></td>
          <td>
            <input type="password" name="pass" placeholder="Enter Your Password" required value="<?php if (isset($_COOKIE['pass'])) {
                                                                                                    echo $_COOKIE['pass'];
                                                                                                  } ?>">
          </td>
        </tr>
        <tr>
          <td>
            <p><input type="checkbox" name="remember" /> Remember me</p>
            <br><br>
          </td>
        </tr>
        <tr>
          <td>
            <button class="btn" type="submit">Login</button>
          </td>
        </tr>
        <tr>
          <td>
            <p>Don't have an account?<a href="Admin_Register.php"> Create here.</a></p>
          </td>
        </tr>
      </table>
    </div>
  </form>


</body>

</html>