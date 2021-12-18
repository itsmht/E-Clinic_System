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
    <title>Home</title>
    <header>
        <nav class="navbar">
            <ul>
            <li><a href="Staff_home.php">Home</a></li>
        <li><a href="Staff_Profile.php">Profile</a></li>
        <li><a href="Staff_financials.php">Financials</a></li>
        <li><a href="Staff_attendance.php">Attendance</a></li>
        <li><a href="Staff_login.php">Logout</a></li>
        
                
            </ul>
        </nav>
        
    </header>
</head>
<body>
  <form>
      <div class = "container3">
          <h1>Attendance Area</h1>

      </div>
</form>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class = "container3">
          <?php
          require '../Controller/Staff_attendance_Check.php';
          ?>
          <h1>Give Your Attendance Here</h1>
          <button type="submit">Click Here</button>

      </div>




</body>
</html>