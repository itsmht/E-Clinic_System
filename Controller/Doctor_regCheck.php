<?php
  $nameErr = $dc_idErr = $exp_inErr = $pnErr = $emailErr = $genderErr = $passErr = "";
  $name = $dc_id = $exp_in = $pn = $email = $gender = $pass = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = $_POST["name"];
    }

    if (empty($_POST["dc_id"])) {
      $dc_idErr = "Id is required";
    } else {
      
      $dc_id = $_POST["dc_id"];
    }


    if (empty($_POST["exp_in"])) {
      $exp_inErr = "Experienced is required";
    } else {
      $exp_in = $_POST["exp_in"];
    }

    if (empty($_POST["pn"])) {
      $pnErr = "Phone number is required";
    } else {
      $pn = $_POST["pn"];
    }





    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = $_POST["email"];
    }
    if (empty($_POST["pass"])) {
      $passErr = "password is required";
    } else {
      $pass = $_POST["pass"];
    }


    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender =$_POST["gender"];
    }
  }



  if ($name != "" and $dc_id != "" and $exp_in != "" and $pn != "" and $email != "" and $pass != "" and $gender != "") {
    $jsonData = file_get_contents('../Model/doc_data.json');
    $array_data = json_decode($jsonData, true);
    $input = array(
      'name'               =>     $name,
      'dc_id'          =>    $dc_id,
      'exp_in'     =>     $exp_in,
      'pn'     =>     $pn,
      'e-mail'          =>    $email,
      'password'     =>     $pass,
      'gender'     =>     $gender,

    );

    $array_data[] = $input;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/doc_data.json', $final_data);
   // header("Location:Doctor_login.php");
    //echo $final_data;

    // DatabaseMySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {

      die("Connection failed: " . $conn->connect_error);
    
    }
else{
  echo "123";
}
    $sql = "INSERT INTO doctors ( Name,	Doctor_ID	,Experience,	Phone_Number,	Email,	Password,	Gender	
    ) VALUES ('$name','$dc_id','$exp_in','$pn','$email','$pass','$gender')";
echo $sql;

    $result = $conn->query($sql);


    $conn->close();


  }

  ?>