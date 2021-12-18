<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./css_staff/style5.css">
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
        <li><a href="Staff_shifts.php">Shift</a></li>
        <li><a href="Staff_pathology.php">Pathology</a></li>
        <li><a href="Staff_login.php">Logout</a></li>

    </ul>
  </nav>
  <style>
  /*.navbar{
    background-color: #6a5f5f;
    border-radius: 30px;
  }*/
  
  </style>
</head>

<body>
<?php

require '../Controller/Staff_Profile_Check.php';

?>


<div class="container">
    <form>
      <h1>Profile</h1>
      <?php
      require '../Controller/Staff_Profile_Check.php';
      
      // $data = file_get_contents("../Model/StaffData.json");
      // $data = json_decode($data, true);
      // $flag = 0;

      // foreach ($data as $row) {
      //   if ($row["email"] == $_SESSION["email"]) {
      //     $name = $row["name"];
      //     $email = $row["email"];
      //     $gender = $row["gender"];
      //     $dob = $row["dob"];

          echo "<h3>Name: $name </h3>";
          echo "<h3>Email: $email </h3>";
          echo "<h3>Gender: $gender </h3>";
          echo "<h3>Date Of Birth: $dob </h3>";

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
  require '../Controller/Staff_Update_Profile.php';
  ?>
      <h1>Update Profile</h1>

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

      <br><br>
      <button type="submit">Update</button>

    </div>
  </form>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container4">
    <?php
 // require '../Controller/Staff_Update_Profile.php';
  ?>
      <h1>Profile Deletion</h1>

      
      <button type="submit">Delete Profile</button>

    </div>
  </form>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container4">
    <?php
  require '../Controller/Staff_resignation.php';
  ?>
      <h1>Resignation</h1>

      
      <button type="submit">Apply</button>

    </div>
  </form>

</body>

</html>