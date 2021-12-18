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

$sql = "SELECT * FROM equipment ";
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
    <th>Equipment Description</th>
    <th>Total Equipment</th>
    <th>Unit Cost</th>
    <th>Total Cost</th>
  </tr>
<?php foreach ($result as $item) { ?>
  <tr>
    <td><?php echo $item['description'] ?></td>
    <td><?php echo $item['total'] ?></td>
    <td><?php echo $item['unitcost'] ?></td>
    <td><?php echo $item['total cost'] ?></td>
    
  </tr>
  <?php } ?>
  </table>
 
 
</body>
</html> 