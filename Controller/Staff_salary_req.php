<?php
 require '../Controller/Staff_Profile_Check.php';


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $salary = 15000;
    $date = date('YYYY-mm-dd');
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
    
    $sqluser="SELECT date FROM financials WHERE date='$date' ";
    $qresult=$conn->query($sqluser);
    $count=mysqli_num_rows($qresult);
    
    if($count > 0)
    {
        ?>
         <script>
         alert("Already Requested for salary. Be patient!");
         </script>
         <?php
    }
else{






  
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

  $sql = "INSERT INTO financials ( salary, date) VALUES ('$salary','$date')";

  $_SESSION["email"] = $email;
    $result = $conn->query($sql);
    
    //header("Location:Staff_home.php");


  $conn->close();
}}
  ?>