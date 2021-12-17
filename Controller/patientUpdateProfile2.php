<?php
  $nameErr = $emailErr = $genderErr = $dobErr = $passErr = $addressErr = "";
  $name = $email = $gender = $pass = $dob = $address = "";


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
    $jsonData = file_get_contents('../Model/data.json');
    $array_data = json_decode($jsonData, true);
    $input = array(
      'name'               =>     $name,
      'e-mail'          =>    $email,
      'password'     =>     $pass,
      'gender'     =>     $gender,
      'address'     =>     $address,
      'dob'     =>     $dob,

    );

    $array_data[] = $input;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/data.json', $final_data);
    // header("Location:login.php");
    // echo $final_data;

    // DatabaseMySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      echo "OK";
    }

    $sql = "INSERT INTO patient ( Name, Email, Password, Address, DOB, Gender) VALUES ('$name','$email','$pass','$address','$dob','$gender')";

    $result = $conn->query($sql);
    echo $sql;

    $conn->close();
  }


  ?>