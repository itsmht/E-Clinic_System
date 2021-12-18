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

$sql = "SELECT * FROM bedstatus ";
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
	<h1 style= "text-align: center">E-Clinic System </h1><br>
	
  <table>
  <tr>
    <th>Room No</th>
    <th>Cabin Type</th>
    <th>Bed Type</th>
    
  </tr>
<?php foreach ($result as $item) { ?>
  <tr>
    <td><?php echo $item['roomno'] ?></td>
    <td><?php echo $item['CabinType'] ?></td>
    <td><?php echo $item['BedType'] ?></td>
    
    
  </tr>
  <?php } ?>
  </table>
 
 
</body>
</html> 