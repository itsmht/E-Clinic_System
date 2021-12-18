<?php
  $nameErr = $emailErr = $genderErr = $passErr = "";
  $name = "";
  $pass = "";




  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
    }
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $pass = $_POST["pass"];
    }

    


    
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
    } 

    $sql = "SELECT  Name, Password FROM patient WHERE Name = '$name' AND Password = '$pass'";

    $result = $conn->query($sql);

  
    $row = $result->fetch_assoc();

    var_dump($row);

    if($row != NULL){
      if (isset($_POST['remember'])) {
        setcookie("name", $name, time() + (86400 * 30));
        setcookie("user_pass", $pass, time() + (86400 * 30));
      }
      // echo "Loged In";
      $_SESSION["name"] = $name;
     
      header("Location:profile.php");
      
    }else{

  ?>
<script>
alert("WRONG Username and Password");
</script>
<?php

  }


  }


?>