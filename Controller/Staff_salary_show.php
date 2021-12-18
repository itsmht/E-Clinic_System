<?php
$name = $email = $dob = $pass = $gender =  "";

require '../Controller/Staff_Profile_Check.php';
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

  $sql = "SELECT  * FROM financials ";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  //var_dump($row);
  
   $salary = $row["salary"];
   $date = $row["date"];
   
   
   
  ?>