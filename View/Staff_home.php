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
  <title>Home</title>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="Staff_home.php">Home</a></li>
        <li><a href="Staff_Profile.php">Profile</a></li>
        <li><a href="Staff_financials.php">Financials</a></li>
        <li><a href="Staff_login.php">Logout</a></li>

      </ul>
    </nav>
    <!-- <link rel="stylesheet" href="style3.css"> -->
    <style>
    /*.navbar{
    background-color: #6a5f5f;
    border-radius: 30px;
  }*/
    .navbar li {
      float: left;
      list-style: none;
      margin: 13px 20px;
    }

    /*.navbar ul{
    overflow: auto;
}*/
    .navbar {
      position: absolute;
      left: 0px;
      height: 40px;
      background-color: #2C64B4;
      width: 100%;
      text-align: center;
    }

    .navbar ul {
      margin: 0;
      padding: 0;
      display: inline-block;
    }

    .navbar li a {
      padding: 6px 6px;
      text-decoration: none;
      color: white;
    }

    .navbar input {
      float: right;
      color: white;
      padding: 12px 75px;
    }

    .search {
      border: 2px solid black;
      border-radius: 14px;
      padding: 0px 17px;
      width: 129px;
    }

    .navbar li a:hover {
      color: red
    }

    body {
      background-image: url("./images/homebg.jpg");
      background-repeat: no-repeat;
      background-position: right top;

    }

    .container {
      text-align: center;
    }

    form {

      position: relative;
      top: 40%;
      left: 50%;
      box-sizing: border-box;
      top: 0;
      left: 0;
      width: 50%;
      height: 50%;
      transform: translate(50%, 30%);


      padding: 48px;
      background-color: #fff;
      border: 1px solid #e3e3e3;
      border-radius: 16px;
      text-align: left;
      font-family: Source Sans Pro;
      border-radius: 4px;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 6px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 12px;

    }

    button:hover {
      opacity: 0.8;
    }

    .container2 {
      padding: 16px;
    }

    .container3 {
      text-align: center;
    }
    </style>
  </header>
</head>

<body>
  <form>
    <div class="container3">
      <h1>Welcome to Staff Portal</h1>

    </div>
  </form>
  <form>
    <div class="container3">
      <h1>Notice</h1>
      <p> Nothing here for today. This site is still in development phase. Come back later!!!</p>

    </div>
  </form>
  <form>
    <div class="container3">
      <h1>Social Hub</h1>
      <iframe width="420" height="315" src="https://www.youtube.com/embed/ErxKDbH-iiI"></iframe>

    </div>
  </form>
</body>

</html>