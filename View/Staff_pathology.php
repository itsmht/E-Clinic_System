<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./css_staff/style6.css">
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
    <?php
    //nice
    ?>
  </header>
</head>

<body>
  <form>
    <div class="container3">
      <h1>Pathology Department</h1>

    </div>
  </form>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
    <?php
  require '../Controller/Staff_path_check.php';
  ?>

      <h2>Patient Information</h2>

      <label for="patient_name"><b>Patient's Name</b></label>
      <input type="text" name="patient_name" placeholder="Enter Patient's Name" required>
      <label for="patient_age"><b>Age</b></label>
      <input type="text" name="patient_age" placeholder="Enter Patient's Age" required>
      <label for="patient_age"><b>Phone Number</b></label>

      <input type="text" name="patient_phone" placeholder="Enter Phone Number" required>
      <label for="patient_phone"><b>Patient's Phone</b></label>
      <label for="date">Date</b></label>
      <input type="date" id="date" name="date" required><br><br>
      Gender:
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="male"> Male
      <input type="radio" name="gender" value="other"> Other
      <span class="error">* <?php echo $genderErr; ?></span>
      <br><br>
      Labs:
      <input type="radio" name="labs" value="xray"> X-RAY
      <input type="radio" name="labs" value="ecg"> ECG
      <input type="radio" name="labs" value="blood"> Blood
      <input type="radio" name="labs" value="urine"> Urine
      <span class="error">* <?php echo $labErr; ?></span>
      <br><br>


      <button type="submit">Submit</button>
      <button type= "submit"><a href="./Staff_pathology_list.php">Full list</a></button>
      
      
    </div>
  </form>


  
</body>

</html>