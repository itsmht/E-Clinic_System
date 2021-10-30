<?php
$nameErr = $dc_idErr = $exp_inErr = $pnErr = $emailErr = $genderErr = $passErr = "";
$name = "";
$password = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
  }

  if (empty($_POST["dc_id"])) {
    $dc_idErr = "Id is required";
  } else {
    $dc_id = ($_POST["dc_id"]);
  }

  if (empty($_POST["exp_in"])) {
    $exp_inErr = "Experienced is required";
  } else {
    $exp_in = ($_POST["exp_in"]);
  }

  if (empty($_POST["pn"])) {
    $pnErr = "Phone number is required";
  } else {
    $pn = ($_POST["pn"]);
  }




  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
  }
  if (empty($_POST["pass"])) {
    $passErr = "password is required";
  } else {
    $password = ($_POST["pass"]);
  }





  $data = file_get_contents("../Model/doc_data.json");
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
      header("Location:Doctor_profile.php");
      break;
    } else {
      $flag = 1;
    }
  }


  if ($flag == 1) {
    echo "Wrong Info";
  }
}