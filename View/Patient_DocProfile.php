<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
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

.pro-cell {
  height: 200px;
  width: 500px;
}

.pro-text {
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
  <h1 class='pro-text'>Doctor</h1>
  <table>
    <tr>
      <th class='pro-cell' colspan='2'>
        <div class='pro-image'></div>
      </th>

    </tr>
    <tr>
      <th>Name</th>
      <td> Tanvir </td>
    </tr>
    <tr>
      <th>Email</th>
      <td> tanvir@gmail.com </td>
    </tr>
    <tr>
      <th>Gender</th>
      <td> Male</td>
    </tr>
    <tr>
      <th>Experties</th>
      <td> Neurologists </td>
    </tr>
    <tr>
      <th>Chamber Time</th>
      <td> 10 AM - 8 PM </td>
    </tr>
  </table>

  <button><a href="./patient_appointment.php">Set Appointment</a></button><button style="margin: 20px;"
    onclick="window.print()">Print this
    page</button>
</body>

</html>