<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>E-Clinic System</title>
	
</head>
<body>
<h1 style= "text-align: center">E-Clinic System </h1><br>

	<?php
  $jsondata = file_get_contents("../Model/Admin_BloodBank.json");
  $data = json_decode($jsondata, true);
  $flag = 0;
 echo '<h2 style= "text-align: center">Blood Bank</h2>';
 $a="";
  foreach ($data['Blood'] as $b) 
  { 
      $a.="Name: ".$b['name']."</br>";
      $a.="Gender: ".$b['gender']."</br>";
      $a.="Blood Group: ".$b['bloodGroup']."</br>";
      $a.="Date of Birth: ".$b['dob']."</br>";
      $a.="Address: ".$b['address']."</br>";
      $a.="email: ".$b['email']."</br></br>";
      
  }
  
  echo $a;
  ?>
  
  </body>
  </html>