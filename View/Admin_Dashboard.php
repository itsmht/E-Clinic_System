<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home</title>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Admin_Profile.php">Profile</a></li>   
                <li><a href="Admin_BedStatus.php">Bed status</a></li>
                <li><a href="Admin_AmbulanceShow.php">Ambulance Details</a></li>
                <li><a href="">Manage the Staff</a></li>
                <li><a href="">Equipment report</a></li>
                <li><a href="">Doctor’s room</a></li>
                <li><a href="Admin_BloodBank.php">Blood Bank</a></li>
                <li><a href="">Edit Profile</a></li>
                <li><a href="Admin_login.php">Logout</a></li>
            </ul>
        </nav>
    <style>
        .navbar li{
    float:left;
    list-style: none; 
    margin: 13px 20px;
}  

.navbar {
    position: absolute;
    left: 0px;
    height: 40px;
    background-color: #2C64B4;
    width: 100%;
    text-align: center;
}
.navbar ul {
    margin: 0;
    padding: 0;
    display: inline-block;
}
.navbar li a{
    padding: 6px 6px;
    text-decoration: none;
    color: white;
}
.navbar input{
    float: right;
    color: white;
    padding: 12px 75px;
}

.navbar li a:hover{
    color: red
}
body {
    background-repeat: no-repeat;
    background-position: right top;
    
   }

form{
    
    position: relative;
    top: 40%;
    left: 50%;
    box-sizing: border-box;
    top: 0;
    left: 0;
    width: 50%;
    height: 50%;
    transform: translate(50%,30%);
    
    
    padding: 48px;
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 16px;
    text-align: left;
    font-family: Source Sans Pro;
    border-radius: 4px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 12px;
    
  }
  
  button:hover {
    opacity: 0.8;
  }
  .container2 {
    padding: 16px;
  }
  .container3{
      text-align: center;
  }
    </style>
    </header>
</head>
<body>
  <form>
      <div class = "container3">
          <h1>Welcome to Admin Portal</h1>

      </div>
</form>
<form>
      <div class = "container3">
          <h1>Notice</h1>
          <p> Nothing here for today. This site is still in development phase. Come back later!!!</p>

      </div>
</form>
<form>
      <div >
          <h1 style= "text-align: center" >Blog Post</h1>
          <img src="./images/blog.jpg" alt="Vaccine" width="800" height="500">
          <h2>Covid-19 Vaccination: Special drive now uncertain<h/1>
          <p> The government is not likely to launch the planned special vaccination programme from August 14 as inadequate vaccine doses mire the current inoculation drive against Covid-19.</p><br>
          <p>However, the current six-day pilot programme, will continue until August 11, officials said, adding that a similar campaign might be launched in September to administer the second dose to individuals who got the first one.Meanwhile, the usual vaccination campaign will continue, they said.</p><br>
          <p>Ever since the government announced giving the jabs to people turning up at the nearly 4,000 special vaccination centres with NID cards, the sheer number of people willing to get the shot has been overwhelming vaccinators across the country for the last three days."We will launch a similar six-day campaign in September to give them the second dose," Shamsul Haque, member secretary of the Vaccine Deployment Committee at the health directorate, told The Daily Star.The current programme was launched with a target of inoculating 32 lakh people, but the target was achieved in the first two of the six days</p>
          
      </div>
</form>

</body>
</html>