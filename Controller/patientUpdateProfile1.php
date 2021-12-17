<?php
$vname = $vemail = $vgender = $vpass = $vdob = $vaddress = "";
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
  $vname = $row["Name"];
  $vgender = $row["Gender"];
  $vdob = $row["DOB"];
  $vemail = $row["Email"];
  $vaddress = $row["Address"];
  $vpass = $row["Password"];


      
      ?>