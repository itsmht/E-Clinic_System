<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./css_staff/style7.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <header>
    <nav class="navbar">
      <ul>
      <li><a href="Staff_home.php">Home</a></li>
        <li><a href="Staff_Profile.php">Profile</a></li>
        <li><a href="Staff_financials.php">Financials</a></li>
        <li><a href="Staff_attendance.php">Attendance</a></li>
        <li><a href="Staff_shifts.php">Shift</a></li>
        <li><a href="Staff_pathology.php">Pathology</a></li>
        <li><a href="Staff_login.php">Logout</a></li>

      </ul>
    </nav>
    <!-- <link rel="stylesheet" href="style3.css"> -->
    
  </header>
</head>

<body>
<div class="container">
    <form>
      <h1>Profile</h1>
      <?php
      require '../Controller/Staff_Profile_Check.php';

      


        $shift = "8 AM TO 8 PM";
        $avail_shift = "8 PM TO 8 AM";
          echo "<h3>Name: $name </h3>";
          echo "<h3>Email: $email </h3>";
          echo "<h3>Current Shift: $shift </h3>";
          echo "<h3>Available Shift: $avail_shift </h3>";
          
          

          //break;
        //} 
        // else {
        //   $flag = 1;
        // }
      //}
      ?>
  </div>
  </form>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container2">
      <?php
    require '../Controller/Staff_shift_req.php';
      ?>
      <button type="request">Change Shift</button>
  </div>
  </form>
</body>

</html>