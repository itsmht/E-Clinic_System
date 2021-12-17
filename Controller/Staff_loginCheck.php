<?php
  $nameErr = $emailErr = $genderErr = $passErr = "";
  

$email = $pass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
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
  $dbname = "e-clinic";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT  email, password FROM staff WHERE email = '$email' AND password = '$pass'";

  $result = $conn->query($sql);


  $row = $result->fetch_assoc();


  if($row != NULL){
    if (isset($_POST['remember'])) {
      setcookie("email", $email, time() + (86400 * 30));
      setcookie("password", $pass, time() + (86400 * 30));
    }
    // echo "Loged In";
    $_SESSION["email"] = $email;
   
    header("Location:Staff_home.php");
    
  }else{


$error = "Your Login Name or Password is invalid";

}
?>








