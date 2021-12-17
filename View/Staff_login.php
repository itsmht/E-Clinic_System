<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="./css_staff/style1.css">
<script src="https://kit.fontawesome.com/e8af05a135.js" crossorigin="anonymous"></script>
  
  
  
</head>

<body>

  <?php
  require '../Controller/Staff_loginCheck.php';
  ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
      <h1>Login Page</h1>
      
      <label for="email"><b>Email</b></label>
      <div class="form-control">
      <input type="text" id="email" name="email" placeholder="Enter Your Email"  value="<?php if (isset($_COOKIE['email'])) {
                                                                                        echo $_COOKIE['email'];
                                                                                      } ?>">
        <i class="error fas fa-exclamation-circle fa-lg"></i>
      <i class="success fas fa-check-circle fa-lg"></i>
      <p class="err-msg">*email is required to login</p>      
      </div>       
                                                                      


      <label for="password"><b>Password</b></label>
      <div class="form-control">
      <input type="text"id="pass" name="pass" placeholder="Enter Your Password" value="<?php if (isset($_COOKIE['password'])) {
                                                                                          echo $_COOKIE['password'];
                                                                                        } ?>">

      <i class="error fas fa-exclamation-circle fa-lg"></i>
      <i class="success fas fa-check-circle fa-lg"></i>
      <p class="err-msg">*password is required to login</p>                                                                                
      <p><input type="checkbox" name="remember" /> Remember me</p>
      </div>
      <br><br>

      <input class="btn" type="submit" name="submit" value="Submit">
      <h1>Don't have an account?<a href="./Staff_Registation.php"> Create here.</a></h1>

    </div>
  </form>


  <script src="../Controller/staff_login_check.js"></script>



</body>

</html>