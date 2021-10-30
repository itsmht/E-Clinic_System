<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  table,
  td,
  th {
    border: 2px solid #000;
    text-align: left;
  }

  a {
    text-decoration: none;
    color: #000;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th,
  td {
    padding: 16px;
  }

  .btn-info {
    margin-left: 20px;
  }

  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #E54754;
    color: white;
  }

  input {
    margin: 20px 0;
  }

  /* navbar */

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


  .btn.sign-up {
    background-color: #fff;
    outline: 2px solid #E54754;
    padding: 10px 28px;
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
  </table>

  <!-- <button onclick="window.print()">Print this page</button> -->
</body>

</html>