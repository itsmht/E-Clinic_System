<?php

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

$sql = "SELECT * FROM doctorroom ";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>E-Clinic System</title>
	
</head>
<link rel="stylesheet" href="./css_admin/style.css">
<body>
	<h1 style= "text-align: center">E-Clinic System </h1><br>
	
  <table>
  <tr>
    <th>Doctor Name</th>
    <th>Apointment Day</th>
    <th>Room No</th>
    <th>Phone</th>
  </tr>
<?php foreach ($result as $item) { ?>
  <tr>
    <td><?php echo $item['Doctor'] ?></td>
    <td><?php echo $item['apointDay'] ?></td>
    <td><?php echo $item['roomNo'] ?></td>
    <td><?php echo $item['phone'] ?></td>
    
  </tr>
  <?php } ?>
  </table>
 
 
</body>
</html> 