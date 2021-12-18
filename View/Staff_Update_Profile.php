<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./css_staff/style4.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <nav class="navbar">
    <ul>
      <li><a href="Staff_home.php">Home</a></li>
      <li><a href="Staff_Profile.php">Profile</a></li>
      <li><a href="Staff_financials.php">Financials</a></li>
      <li><a href="Staff_attendance.php">Attendance</a></li>
      <li><a href="Staff_login.php">Logout</a></li>

    </ul>
  </nav>
  
  /*.navbar{
    background-color: #6a5f5f;
    border-radius: 30px;
  }*/
  
 
</head>

<body>


    


  
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  
    <div class="container2">
    
      <h1>Update Profile</h1>
      <?php
      require '../Controller/Staff_Profile_Check.php';

  require '../Controller/Staff_Update_Profile.php';
  ?>
      <label for="name"><b>Name</b></label>
      <input type="text" name="name" placeholder="<?php echo $name; ?>" required>
      <label for="email"><b>Email</b></label>
      <input type="text" name="email" placeholder="<?php echo $email; ?>" required>
      <label for="dob">Birthdate</b></label>
      <input type="date" id="dob" name="dob" required><br><br>
      <label for="password"><b>Password</b></label>
      <input type="text" name="pass" placeholder="Enter Your Password" required>
      Gender:
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="male"> Male
      <input type="radio" name="gender" value="other"> Other

      <br><br>
      <button type="submit" id = "button">Update</button>

    </div>
  </form>
</body>

</html>