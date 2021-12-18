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
<link rel="stylesheet" href="./css_admin/style.css">
<body>
	<h1 style= "text-align: center">E-Clinic System </h1><br>
	
  
 
 
	<h2>Data loaded from database using ajax and jquery</h2>
	<button id="load">Click</button>
	<div id="main">
	</div>
	<script src="..\Controller\jquery.js"></script>
  
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"Admin_equipmentCheck.php",
          
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
	   });
	</script>

</body>
</html> 