<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>







<body>
  <h1>Profile</h1>
  <?php
  $data = file_get_contents("../Model/doc_data.json");
  $data = json_decode($data, true);
  $flag = 0;

  foreach ($data as $row) {
    if ($row["name"] == $_SESSION["username"]) {
      $name = $row["name"];
      $dc_id = $row["dc_id"];
      $exp_in = $row["exp_in"];
      $pn = $row["pn"];
      $email = $row["e-mail"];
      $gender = $row["gender"];
      echo "<h3>Name: $name </h3>";
      echo "<h3>Email: $email </h3>";
      echo "<h3>Gender: $gender </h3>";
      break;
    } else {
      $flag = 1;
    }
  }

  ?>

  <button><a><a href="Doctor_patientlist.php">Patient List</a></a></button></br>
  <button><a><a href="Doctor_patientinfo.php">Patient info</a></a></button></br>
  <button><a><a href="Doctor_appoinments.php">Appoinmentsts</a></a></button></br>
  <button><a><a href="Doctor_profile_update.php">Update Profile</a></a></button></br>
  <button><a><a href="Doctor_view_profile.php">View Profile</a></a></button></br>




</body>

</html>