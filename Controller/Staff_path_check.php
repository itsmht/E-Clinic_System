<?php
  $nameErr = $emailrr = $genderErr = $labErr = $dateErr="";
  
  $patient_name=$patient_age=$patient_phone=$date=$patient_gender=$labs="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["patient_name"])) {
      $nameErr = "Name is required";
    } else {
      $patient_name = $_POST["patient_name"];
    }

    if (empty($_POST["patient_age"])) {
      $emailrr = "email is required";
    } else {
      $patient_age= $_POST["patient_age"];
    }
    if (empty($_POST["patient_phone"])) {
        $emailrr = "email is required";
      } else {
        $patient_phone= $_POST["patient_phone"];
      }
    if (empty($_POST["date"])) {
      $dateErr = "Date is required";
    } else {
      $date = $_POST["date"];
    }


    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = $_POST["gender"];
    }
    if (empty($_POST["labs"])) {
        $labErr = "Labs is required";
      } else {
        $labs = $_POST["labs"];
      }
  }



//   if ($name != "" and $email!= "" and $pass != "" and $gender != "") {
//     $jsonData = file_get_contents('../Model/StaffData.json');
//     $array_data = json_decode($jsonData, true);
//     $input = array(
//       'name'               =>     $name,
//       'email'          =>    $email,
//       'password'     =>     $pass,
//       'dob'          => $dob,
//       'gender'     =>     $gender,

//     );

//     $array_data[] = $input;
//     $final_data = json_encode($array_data);
//     file_put_contents('../Model/StaffData.json', $final_data);
//     //header("Location:Staff_login.php");
//     //echo $final_data;
//   }
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

  $sql = "INSERT INTO pathology ( patient_name, patient_age,patient_phone,date, patient_gender, labs) VALUES ('$patient_name','$patient_age','$patient_phone','$date','$patient_gender','$labs')";

  $result = $conn->query($sql);
  echo $date;


  $conn->close();

  ?>