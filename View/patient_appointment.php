<!DOCTYPE HTML>
<html>

<head>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  h2 {
    text-align: center;
    padding-bottom: 20px;
  }

  label {
    padding: 15px 0 5px 0;
  }

  input {
    padding: 5px;
  }

  .btn-submit {
    padding: 10px;
    margin-top: 15px;
    margin-bottom: 20px;
    background-color: #E54754;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }

  .error {
    color: #FF0000;
  }

  .radio {
    margin-right: 5px;
  }

  a {
    text-decoration: none;
    color: #000;
  }

  form {
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    justify-content: center;
    max-width: 500px;
    height: 800px;
    margin: auto;
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
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Appointment</h2>
    <label for="">Name:</label>
    <input type="text" name="name ">

    <!-- <br><br> -->
    <label for="">E-mail:</label>
    <input type="email" name="email">

    <!-- <br><br> -->
    <label for="">Phone:</label>
    <input type="tel" name="phone">

    <!-- <br><br> -->
    <label for="">Appointment Date:</label>
    <input type="datetime-local" name="dob">

    <!-- <br><br> -->
    <label for=""> Confirmation requested by:</label>
    <div>
      <input class="radio" type="radio" name="confirm" value="phone">Phone
      <input class="radio" type="radio" name="confirm" value="email">Email

    </div>

    <!-- <br><br> -->
    <input class="btn-submit" type="submit" name="submit" value="Submit">

  </form>


</body>

</html>