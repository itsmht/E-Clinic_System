<!DOCTYPE HTML>
<html>

<head>
  <style>
  .error {
    color: #FF0000;
  }
  </style>
</head>

<body>

  <?php
  $nameErr = $dc_idErr = $exp_inErr = $pnErr = $emailErr = $genderErr = $passErr = "";
  $name = $dc_id = $exp_in = $pn = $email = $gender = $pass = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["dc_id"])) {
      $dc_idErr = "Id is required";
    } else {
      echo "hello";
      $dc_id = test_input($_POST["dc_id"]);
    }


    if (empty($_POST["exp_in"])) {
      $exp_inErr = "Experienced is required";
    } else {
      $exp_in = test_input($_POST["exp_in"]);
    }

    if (empty($_POST["pn"])) {
      $pnErr = "Phone number is required";
    } else {
      $pn = test_input($_POST["pn"]);
    }





    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $password = test_input($_POST["pass"]);
    }


    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }



  if ($name != "" and $dc_id != "" and $exp_in != "" and $pn != "" and $email != "" and $password != "" and $gender != "") {
    $jsonData = file_get_contents('../Model/doc_data.json');
    $array_data = json_decode($jsonData, true);
    $input = array(
      'name'               =>     $name,
      'dc_id'          =>    $dc_id,
      'exp_in'     =>     $exp_in,
      'pn'     =>     $pn,
      'e-mail'          =>    $email,
      'password'     =>     $password,
      'gender'     =>     $gender,

    );

    $array_data[] = $input;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/doc_data.json', $final_data);
    header("Location:Doctor_registration.php");
    echo $final_data;
  }


  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>


  <h2>Update Profile</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Doctor ID: <input type="text" name="dc_id">
    <span class="error">* <?php echo $dc_idErr; ?></span>
    <br><br>
    Experiences: <input type="text" name="exp_in">
    <span class="error">* <?php echo $exp_in; ?></span>
    <br><br>
    Phone Number: <input type="text" name="pn">
    <span class="error">* <?php echo $pnErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Password: <input type="text" name="pass">
    <span class="error">* <?php echo $passErr; ?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>





</body>

</html>