<?php
// Start the session
session_start();
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

$sql = "SELECT * FROM bloodgroup ";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>E-Clinic System</title>
  <link rel="stylesheet" href="./css-patient/table.css">
</head>
<body>

<h2 style= "text-align: center">Blood Bank</h2>
<table>
  <tr>
    
    <th>Name</th>
    <th>Gender</th>
    <th>Date of Birth</th>
    <th>Address</th>
    <th>Email</th>
    <th>Blood Group</th>
 
  </tr>
<?php foreach ($result as $item) { ?>
  <tr>
    
    <td><?php echo $item['name'] ?></td>
    <td><?php echo $item['gender'] ?></td>
    <td><?php echo $item['dob'] ?></td>
    <td><?php echo $item['Address'] ?></td>
    <td><?php echo $item['Email'] ?></td>
    <td><?php echo $item['bg'] ?></td>

  </tr>
  <?php } ?>
  </table>

	
  
  </body>
  </html>