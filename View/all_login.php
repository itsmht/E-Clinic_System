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

  .showcase {
    width: 85%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 150px;
  }

  .show-text {
    width: 600px;

  }

  .show-text p {
    font-size: 18px;
    width: 500px;
    margin-top: 10px;
  }

  .showcase h3 {
    font-size: 64px;
    font-weight: 500;
  }

  .show-text .btn {
    margin-left: 0;
    margin-top: 30px;
    padding: 12px 28px;
  }

  .cards {
    width: 85%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    margin-top: 20px;

  }

  .card {
    width: 390px;
    height: 840px;
    background-color: #ECECEC;
    border-radius: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

  }

  .card p {
    font-size: 24px;
    font-weight: bold;
  }

  .card div {
    margin-bottom: 20px;
  }

  .card button {
    margin-left: 0;
  }
  </style>
</head>

<body>
  <header>
    <nav>
      <div class="logo"><img src="./images/logo.png" alt=""></div>
      <ul>
        <li class="nav-link"><a href="index.php">Home</a></li>
        <li class="nav-link"><a href="">About</a></li>
        <li class="nav-link"><a href="">Contact</a></li>
        <li><button class="btn sign-up"><a href="all_signUp.php">Sign Up</a></button></li>
        <li><button class="btn log-in"><a href="all_login.php">Login</a></button></li>
      </ul>
    </nav>
    <div class="cards">
      <div class="card">
        <div> <img src="./images/doctor.png" alt=""></div>
        <div>
          <p>Doctor</p>
        </div>
        <div>
          <button class="btn log-in"><a href="./Doctor_login.php">Login</a></button>
        </div>
      </div>
      <div class="card">
        <div> <img src="./images/patient.png" alt=""></div>
        <div>
          <p>Patient</p>
        </div>
        <div>
          <button class="btn log-in"><a href="./login.php">Login</a></button>
        </div>
      </div>
      <div class="card">
        <div> <img src="./images/admin.png" alt=""></div>
        <div>
          <p>Admin</p>
        </div>
        <div>
          <button class="btn log-in"><a href="./Admin_login.php">Login</a></button>
        </div>
      </div>
      <div class="card">
        <div> <img src="./images/staff.png" alt=""></div>
        <div>
          <p>Staff</p>
        </div>
        <div>
          <button class="btn log-in"><a href="./Staff_login.php">Login</a></button>
        </div>
      </div>

    </div>
  </header>

</body>

</html>