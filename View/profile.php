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
  <title>Document</title>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  a {
    text-decoration: none;
    color: #000;
  }


  li {
    list-style: none;
  }

  nav {
    width: 85%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 18px;
  }

  .logo img {
    width: 80%;
  }

  .nav-link {
    margin-left: 50px;
    padding: 10px 25px;
    font-size: 18px;
    font-weight: 500;
  }

  ul {
    display: flex;
    justify-content: space-between;
    align-items: center;

  }

  .btn {
    font-size: 20px;
    margin-left: 50px;
    border: none;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 500;
  }

  .btn.log-in {
    background-color: #E54754;
  }

  .btn.log-in a {
    color: #fff;
  }

  .btn.sign-up {
    background-color: #fff;
    outline: 2px solid #E54754;
    padding: 10px 28px;
  }

  .btn.log-in a {
    color: #fff;
  }

  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
    font-size: 18px;
    width: 400px;
    margin: auto;


  }

  th {
    font-weight: bold;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
  }

  button {
    margin: 15px 2px;
  }

  .pro-cell {
    height: 200px;
    width: 500px;
  }

  .pro-text {
    display: block;
    text-align: center;
    margin: 50px 0 20px 0;
  }

  .pro-image {
    background-color: #E54754;
    height: 120px;
    width: 120px;
    margin: auto;
    border-radius: 50%;
  }

  .profile-section {
    display: flex;
    width: 85%;
    margin: auto;
    margin-top: 50px;

  }

  .dashboard {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 40%;
  }

  .container {
    padding: 2px 16px;
  }

  .card {
    margin: 0 24px 0 24px;
    width: 300px;
  }

  .card-text {
    padding: 16px;
    text-align: center;
    font-size: 18px;
  }

  img {
    width: 100%;
  }
  </style>
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
      $data = file_get_contents("../Model/data.json");
      $data = json_decode($data, true);
      $flag = 0;

      foreach ($data as $row) {
        if ($row["name"] == $_SESSION["username"]) {
          $name = $row["name"];
          $gender = $row["gender"];
          $dob = $row["dob"];
          $email = $row["e-mail"];
          $address = $row["address"];



          echo "  <table>
      <tr>
      <th class='pro-cell' colspan='2'><div class='pro-image'></div><button>Update Profile</button></th>
      
    </tr>
      <tr>
        <th>Name</th>
        <td> $name </td>
      </tr>
      <tr>
      <th>Email</th>
      <td> $email </td>
     </tr>
     <tr>
      <th>Gender</th>
      <td> $gender</td>
      </tr>
     <tr>
      <th>Address</th>
      <td> $address </td>
      </tr>
      <tr>
      <th>Date of Birth</th>
      <td> $dob </td>
     </tr>
    </table>";

          break;
        } else {
          $flag = 1;
        }
      }
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