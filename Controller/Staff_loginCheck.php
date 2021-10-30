<?php
  $nameErr = $emailErr = $genderErr = $passErr = "";
  $info['email'] = "";
  $info['password'] = "";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $info['email'] = test_input($_POST["email"]);
    }
    if (empty($_POST["pass"])) {
      $passErr = "Password is required";
    } else {
      $info['password'] = test_input($_POST["pass"]);
    }


    $data = file_get_contents("../Model/StaffData.json");
    $data = json_decode($data, true);
    $flag = 0;

    foreach ($data as $row) {
      if ($row["email"] == $info['email'] and  $row["password"] == $info['password']) {
        if (isset($_POST['remember'])) {
          setcookie("email", $info['email'], time() + (86400 * 30));
          setcookie("password", $info['password'], time() + (86400 * 30));
        }
        $_SESSION["email"] = $info['email'];
        $flag = 0;
       header("Location:Staff_home.php");
        break;
      } else {
        $flag = 1;
      }
    }

    if ($flag == 1) {
        echo "Wrong Info";
      
    }
  }





  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>