<?php
  $UnameErr =  $passErr = "";
  $info['Uname'] = "";
  $info['pass'] = "";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Uname"])) {
      $emailErr = "UserName is required";
    } else {
      $info['Uname'] = test_input($_POST["Uname"]);
    }
    if (empty($_POST["pass"])) {
      $passErr = "Password is required";
    } else {
      $info['pass'] = test_input($_POST["pass"]);
    }


    $data = file_get_contents("../Model/admindata.json");
    $data = json_decode($data, true);
    $flag = 0;

    foreach ($data as $row) {
      if ($row["Uname"] == $info['Uname'] and  $row["pass"] == $info['pass']) {
        if (isset($_POST['remember'])) {
          setcookie("Uname", $info['Uname'], time() + (86400 * 30));
          setcookie("pass", $info['pass'], time() + (86400 * 30));
        }
        $_SESSION["Uname"] = $info['Uname'];
        $flag = 0;
       header("Location:Admin_Dashboard.php");
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