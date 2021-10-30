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
      echo "<h3>Doctor ID: $dc_id </h3>";
      echo "<h3>Specialized: $exp_in </h3>";
      echo "<h3>Phone Number: $pn </h3>";
      echo "<h3>Email: $email </h3>";
      echo "<h3>Gender: $gender </h3>";
      break;
    } else {
      $flag = 1;
    }
  }

  ?>






</body>

</html>