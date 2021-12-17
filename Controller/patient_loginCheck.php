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

    


    // $data = file_get_contents("../Model/data.json");
    // $data = json_decode($data, true);
    // $flag = 0;

    // foreach ($data as $row) {
    //   if ($row["name"] == $name and  $row["password"] == $pass) {
    //     if (isset($_POST['remember'])) {
    //       setcookie("name", $name, time() + (86400 * 30));
    //       setcookie("user_pass", $pass, time() + (86400 * 30));
    //     }
    //     // echo "Loged In";
    //     $_SESSION["username"] = $name;
    //     $flag = 0;
    //     // header("Location:profile.php");
    //     break;
    //   } else {
    //     $flag = 1;
    //   }
    // }


    // if ($flag == 1) {
    //   echo "Wrong Info";
    // }

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
      $_SESSION["username"] = $name;
     
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