<?php
  $UnameErr =  $passErr = "";
  $Uname = $pass = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Uname"])) {
      $UnameErr = "User name is required";
    } else {
      $Uname = $_POST["Uname"];
    }
    if (empty($_POST["pass"])) {
      $passErr = "pass is required";
    } else {
      $pass = $_POST["pass"];
    }
  }
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "e_clinic";
    
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
    
      $sql = "SELECT  username, password FROM RegisterAdmin WHERE username = '$Uname' AND password = '$pass'";
    
      $result = $conn->query($sql);
    
    
      $row = $result->fetch_assoc();
    
      if($row != NULL){
        if (isset($_POST['remember'])) {
          setcookie("Uname", $Uname, time() + (86400 * 30));
          setcookie("password", $pass, time() + (86400 * 30));
        }
        // echo "Loged In";
        $_SESSION["Uname"] = $Uname;
       
        header("Location:Admin_Dashboard.php");
        
      }else{
    
    
    $error = "Your Login Name or Password is invalid";

    
      
    }
  





  ?>