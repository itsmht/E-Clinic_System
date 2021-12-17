<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>E-Clinic System</title>
  <link rel="stylesheet" href="./css_admin/style1.css">
<script src="https://kit.fontawesome.com/e8af05a135.js" crossorigin="anonymous"></script>
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