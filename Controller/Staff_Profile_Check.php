<?php
$name = $email = $dob = $pass = $gender =  "";
$sname = $_SESSION["name"];
//  DatabaseMySQL
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT  * FROM patient WHERE Name = '$sname'";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  // var_dump($row);
  $name = $row["Name"];
  $gender = $row["Gender"];
  $dob = $row["DOB"];
  $email = $row["Email"];
  $address = $row["Address"];
  ?>