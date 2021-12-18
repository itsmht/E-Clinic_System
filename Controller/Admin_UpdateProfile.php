<?php
  $nameErr = $emailErr = $genderErr = $dobErr = $passErr = $addressErr = "";
  $name = $email = $gender = $pass = $dob = $address = "";
  require '../Controller/Admin_porfileCheck.php';
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = $_POST["email"];
    }
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $pass = $_POST["pass"];
    }
    if (empty($_POST["address"])) {
      $addressErr = "address is required";
    } else {
      $address = $_POST["address"];
    }


    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = $_POST["gender"];
    }
    if (empty($_POST["dob"])) {
      $dobErr = "dob is required";
    } else {
      $dob = $_POST["dob"];
    }
  }

  // JSON

  if ($name != "" and $email != "" and $pass != "" and $gender != "") {
    
    // DatabaseMySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e_clinic";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      echo "OK";
    }

    $sql = "UPDATE registeradmin SET  name='$name', email='$email', password='$pass', dob='$dob', gender='$gender' WHERE Username = '$sUname' LIMIT 1";
    $_SESSION["Uname"] = $Uname;
    $result = $conn->query($sql);
    header("Location:Admin_EditProfile.php");
    echo $sql;

    $conn->close();
  }


  ?>