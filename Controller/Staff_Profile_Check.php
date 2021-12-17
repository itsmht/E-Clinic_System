<?php
$name = $email = $dob = $pass = $gender =  "";
$semail = $_SESSION["email"];
//  DatabaseMySQL
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

  $sql = "SELECT  * FROM staff WHERE email = '$semail'";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  //var_dump($row);
  
   $name = $row["name"];
   $email = $row["email"];
   $dob = $row["dob"];
   $gender = $row["gender"];
   
   
  ?>