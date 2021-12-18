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

$sql = "SELECT * FROM ambulance ";
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
    <th>DriverName</th>
    <th>AmulanceNo</th>
    <th>Loacation</th>
    <th>Type</th>
  </tr>
<?php foreach ($result as $item) { ?>
  <tr>
    <td><?php echo $item['DriverName'] ?></td>
    <td><?php echo $item['AmulanceNo'] ?></td>
    <td><?php echo $item['Loacation'] ?></td>
    <td><?php echo $item['Type'] ?></td>
    
  </tr>
  <?php } ?>
  </table>
 
 
</body>
</html> 