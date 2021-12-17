<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css-patient/profile.css">
  <title>Document</title>

</head>

<body>
  <header>
    <nav>
      <div class="logo"><img src="./images/logo.png" alt=""></div>
      <ul>
        <li class="nav-link"><a href="./profile.php">Profile</a></li>
        <li class="nav-link"><a href="">FAQ</a></li>
        <li><button class="btn sign-up"><a href="./login.php">Logout</a></button></li>

      </ul>
    </nav>
  </header>
  <!-- <h1 class='pro-text'>Profile</h1> -->
  <div class="profile-section">

    <div>

      <?php

require '../Controller/patientProfile.php';

?>


    </div>
    <div class="dashboard">
      <a class="card" href="./patient_doctorList.php">
        <div>
          <img src="./images/doc_card.png">
          <div class="card-text">
            <h4>Doctor List</h4>
          </div>
        </div>
      </a>
      <a class="card" href="./patient_appointment.php">
        <div>
          <img src="./images/papers.png">
          <div class="card-text">
            <h4>Appoinments</h4>
          </div>
        </div>
      </a>

    </div>
  </div>


</body>

</html>