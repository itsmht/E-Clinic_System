<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./css_staff/style6.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="Staff_home.php">Home</a></li>
        <li><a href="Staff_Profile.php">Profile</a></li>
        <li><a href="Staff_financials.php">Financials</a></li>
        <li><a href="Staff_attendance.php">Attendance</a></li>
        <li><a href="Staff_shifts.php">Shift</a></li>
        <li><a href="Staff_pathology.php">Pathology</a></li>
        <li><a href="Staff_login.php">Logout</a></li>
      

      </ul>
    </nav>
    <!-- <link rel="stylesheet" href="style3.css"> -->
    
  </header>
</head>

<body>
  <form>
    <div class="container3">
      <h1>Welcome to Staff Portal</h1>

    </div>
  </form>
  <form>
    <div class="container3">
      <h1>Notice</h1>
      
      <h2>Click the button to load notifications.</h2>
	<button id="load">Click</button>
	<div id="main">
	</div>
	<script src="..\Controller\jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"Staff_notice.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
	   });
	</script>

    </div>
  </form>
  <form>
    <div class="container3">
      <h1>Social Hub</h1>
      <iframe width="420" height="315" src="https://www.youtube.com/embed/ErxKDbH-iiI"></iframe>

    </div>
  </form>
</body>

</html>