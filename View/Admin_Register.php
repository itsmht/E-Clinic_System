<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Clinic System</title>
	<head>
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  h2 {
    text-align: center;
    padding-bottom: 20px;
  }

  label {
    padding: 15px 0 5px 0;
  }

  input {
    padding: 5px;
  }

  .btn {
    padding: 10px;
    margin-top: 15px;
    margin-bottom: 20px;
    background-color: #E54754;
    color: #fff;
    border: none;
    cursor: pointer;
  }

  .error {
    color: #FF0000;
  }

  .radio {
    margin-right: 5px;
  }


  form {
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    justify-content: center;
    max-width: 500px;
    height: 800px;
    margin: auto;
  }
  </style>
<!DOCTYPE html> 
</head>
<body>

<?php
  require '../Controller/Admin_regCheck.php';
  ?>

	<h1 >E-Clinic System Register</h1><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table>
 	<tr >
 		<td><b>User Name  </b></td>
        <td> <input type="text" name="Uname" id="Uname" placeholder="Username" required> </td>
 	</tr>
	<tr >
 		<td><b>Name  </b></td>
        <td> <input type="text" name="name" id="name" placeholder="Fullname" required> </td>
 	</tr>
	
	<tr >
 		<td><b>Gender </b></td>
        <td> <input type="radio" name="gender" value="Male">&nbsp; Male 
			<input type="radio" name="gender"  value="Female">&nbsp; Female
			<input type="radio" name="gender"  value="Other">&nbsp; Other
			<span class="error">* <?php echo $genderErr; ?></span>
		</td>
 	</tr>
	<tr >
 		<td><b>Date Of Birth  </b></td>
        <td> <input type="date" name="dob" required > </td>
 	</tr>
	<tr >
 		<td><b>Address </b></td>
        <td> <textarea name= "address" row="3" cols ="16" required></textarea> </td>
 	</tr>
	<tr >
 		<td><b>Email  </b></td>
        <td> <input type="email" name="email" id="email" placeholder="Email" required> </td>
 	</tr>
	 
    <tr >
 		<td><b>Password </b></td>
        <td> <input type="Password" name="pass" id="pass" placeholder="Password" required> </td>
 	</tr>
    <tr >
        <td> <input type="submit" name="btnreg" id="reg" value="Register "> </td>
 	</tr>
    
	</table > 
</form>
  
</body>
</html> 