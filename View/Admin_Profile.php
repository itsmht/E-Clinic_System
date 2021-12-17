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

$sql = "SELECT * FROM registeradmin ";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>E-Clinic System</title>
	
</head>
<link rel="stylesheet" href="./css-patient/table.css">
<body>
	<h1 style= "text-align: center">E-Clinic System profile</h1><br>
	
  <table>
  <tr>
    <th>User Name</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Address</th>
    
  </tr>
<?php foreach ($result as $item) { ?>
  <tr>
    <td><?php echo $item['username'] ?></td>
    <td><?php echo $item['name'] ?></td>
    <td><?php echo $item['email'] ?></td>
    <td><?php echo $item['dob'] ?></td>
    <td><?php echo $item['gender'] ?></td>
    <td><?php echo $item['address'] ?></td>
    
  </tr>
  <?php } ?>
  </table>
 
 
</body>
</html> 