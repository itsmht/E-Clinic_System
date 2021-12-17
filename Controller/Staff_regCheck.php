<?php
  $nameErr = $emailrr = $genderErr = $passErr = $dobErr="";
  $name = $email= $gender = $pass = $dob = $phone= "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
      $emailrr = "email is required";
    } else {
      $email= $_POST["email"];
    }
    if (empty($_POST["dob"])) {
      $dobErr = "Date of Birth is required";
    } else {
      $dob = $_POST["dob"];
    }
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $pass = $_POST["pass"];
    }


    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = $_POST["gender"];
    }
  }



  if ($name != "" and $email!= "" and $pass != "" and $gender != "") {
    $jsonData = file_get_contents('../Model/StaffData.json');
    $array_data = json_decode($jsonData, true);
    $input = array(
      'name'               =>     $name,
      'email'          =>    $email,
      'password'     =>     $pass,
      'dob'          => $dob,
      'gender'     =>     $gender,

    );

    $array_data[] = $input;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/StaffData.json', $final_data);
    //header("Location:Staff_login.php");
    //echo $final_data;
  }
  // DatabaseMySQL
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e-clinic";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "INSERT INTO staff ( name, email,dob, password, gender) VALUES ('$name','$email','$dob','$pass','$gender')";

  $result = $conn->query($sql);


  $conn->close();

  ?>