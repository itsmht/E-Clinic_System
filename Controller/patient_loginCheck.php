<?php
  $nameErr = $emailErr = $genderErr = $passErr = "";
  $name = "";
  $password = "";




  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
    }
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $password = $_POST["pass"];
    }




    $data = file_get_contents("../Model/data.json");
    $data = json_decode($data, true);
    $flag = 0;

    foreach ($data as $row) {
      if ($row["name"] == $name and  $row["password"] == $password) {
        if (isset($_POST['remember'])) {
          setcookie("name", $name, time() + (86400 * 30));
          setcookie("user_pass", $password, time() + (86400 * 30));
        }
        // echo "Loged In";
        $_SESSION["username"] = $name;
        $flag = 0;
        header("Location:profile.php");
        break;
      } else {
        $flag = 1;
      }
    }

    if ($flag == 1) {
      echo "Wrong Info";
    }
  }


  ?>