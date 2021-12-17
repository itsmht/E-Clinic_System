<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);


$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css-patient/table.css">
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
  <h2>Doctor List</h2>
  <label for="Doctors">Search:</label>
  <select>
    <option value="Name">Name</option>
    <option value="Experties">Experties</option>
  </select>
  <input type="search">
  <input type="submit">

  <table>
    <tr>
      <th>Firstname</th>
      <th>Expert In</th>
      <th>Time</th>
      <th>Set Appoinmentst</th>
    </tr>
    <tr>
      <td>Tanvir</td>
      <td>Neurologists</td>
      <td>10 AM - 8 PM</td>
      <td><button><a href="./patient_appointment.php">Set Appointment</a></button><button class="btn-info"><a
            href="./Patient_DocProfile.php">More
            info</a></button></td>
    </tr>
    <tr>
      <td>Akash</td>
      <td>Psychiatrists</td>
      <td>10 AM - 8 PM</td>
      <td><button>Set Appoinment</button><button class="btn-info">More Info</button></td>
    </tr>
    <tr>
      <td>Niloy</td>
      <td>Radiologists</td>
      <td>10 AM - 8 PM</td>
      <td><button>Set Appoinment</button><button class="btn-info">More Info</button></td>
    </tr>
    <tr>
      <td>Peter</td>
      <td>Radiologists</td>
      <td>11 AM - 9 PM</td>
      <td><button>Set Appoinment</button><button class="btn-info">More Info</button></td>
    </tr>
    <?php foreach ($result as $item) { ?>
    <tr>
      <td><?php echo $item['Name'] ?></td>
      <td><?php echo $item['Expert In'] ?></td>
      <td><?php echo $item['Time'] ?></td>
      <td><button>Set Appoinment</button><button class="btn-info">More Info</button></td>
    </tr>
    <?php } ?>
  </table>

  <!-- <button onclick="window.print()">Print this page</button> -->
</body>

</html>