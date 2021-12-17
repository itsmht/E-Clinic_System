<?php
$name = $email = $gender = $pass = $dob = $address = "";
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
  $name = $row["Name"];
  $gender = $row["Gender"];
  $dob = $row["DOB"];
  $email = $row["Email"];
  $address = $row["Address"];


          echo "  <table>
      <tr>
      <th class='pro-cell' colspan='2'><div class='pro-image'></div><button><a href='./patient_updateProfile.php'>Update Profile</button></th>
      
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

      
      
      ?>