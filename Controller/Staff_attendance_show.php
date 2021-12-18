<?php
 require '../Controller/Staff_Profile_Check.php';


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = date('YYYY-mm-dd');
  // DatabaseMySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-clinic";


    $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  // Create connection
  $sql = "SELECT  * FROM attendance WHERE email = '$semail'";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();
  //var_dump($row);
  
   $date = $row["date"];
   $conn->close();
  }
?>


