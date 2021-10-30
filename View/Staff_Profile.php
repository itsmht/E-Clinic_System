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
  <title>Profile</title>
  <nav class="navbar">
    <ul>
      <li><a href="Staff_home.php">Home</a></li>
      <li><a href="Staff_Profile.php">Profile</a></li>
      <li><a href="Staff_financials.php">Financials</a></li>
      <li><a href="Staff_login.php">Logout</a></li>

    </ul>
  </nav>
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
</head>

<body>


  <div class="container">
    <form>
      <h1>Profile</h1>
      <?php
      $data = file_get_contents("../Model/StaffData.json");
      $data = json_decode($data, true);
      $flag = 0;

      foreach ($data as $row) {
        if ($row["email"] == $_SESSION["email"]) {
          $name = $row["name"];
          $email = $row["email"];
          $gender = $row["gender"];
          $dob = $row["dob"];

          echo "<h3>Name: $name </h3>";
          echo "<h3>Email: $email </h3>";
          echo "<h3>Gender: $gender </h3>";
          echo "<h3>Date Of Birth: $dob </h3>";

          break;
        } else {
          $flag = 1;
        }
      }
      ?>
  </div>
  </form>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container2">
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
</body>

</html>