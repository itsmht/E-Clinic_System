<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>E-Clinic System</title>
	
</head>
<style>
  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
    font-size: 18px;

  }

  th {
    font-weight: bold;
  }

  th,
  td {
    padding: 10px;
    text-align: left;

  }
  table{
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;
    }
  </style>
<body>
	<h1 style= "text-align: center">E-Clinic System profile</h1><br>
	<?php
  $data = file_get_contents("../Model/admindata.json");
  $data = json_decode($data, true);
  $flag = 0;

  foreach ($data as $row) {
    if ($row["Uname"] == $_SESSION["Uname"]) {
		  $Uname = $row["Uname"];
		  $name = $row["name"];
      $gender = $row["gender"];
      $dob = $row["dob"];
      $address = $row["address"];
      $email = $row["email"];
      $pass = $row["pass"];
      
      
      


      echo "  <table>
	  <tr>
        <th>UserName</th>
        <td> $Uname </td>
    </tr>
      <tr>
        <th>Name</th>
        <td> $name </td>
    </tr>
    <tr>
      <th>Email</th>
      <td> $email </td>
    </tr>
    <tr>
      <th>Gender</th>
      <td> $gender</td>
    </tr>
    <tr>
      <th>Address</th>
      <td> $address </td>
    </tr>
    <tr>
      <th>Date of Birth</th>
      <td> $dob </td>
    </tr>
    </table>";

      break;
    } else {
      $flag = 1;
    }
  }
  ?>
</body>
</html> 