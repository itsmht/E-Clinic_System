<html>
    <head>
        <title>Ambulance</title>
    </head>
    <body>
        <h1>Ambulance Details</h1>
        <form action="#"method="POST">
        <table>
            <tr>
                <td>Driver Name</td>
                <td>
                    <input type="text" name="driverName" id="driverName">
                </td>
            </tr>
            <tr>
                <td>Registration Number</td>
                <td>
                    <input type="text" name="RegNum" id="RegNum">
                </td>
            </tr>
            <tr>
                <td>Location</td>
                <td>
                    <input type="text" name="location" id="location">
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="number" name="phone" id="phone">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnClick" value="Add">
                </td>
            </tr>
        </table>


        </form>   
    </body>

</html>
<?php   
$driverName=$_POST['driverName'];
$RegNum=$_POST['RegNum'];
$location=$_POST['location'];
$phone=$_POST['phone'];

$serverName="localhost";
$userName="root";
$password="";
$dbName="E_clinic";

$conn=new mysqli($serverName,$userName,$password,$dbName);
if ($conn->connect_error)
{
    die("Conncetion failed: ".$conn->connect_error);
}
else
{
    echo "Successfully connection Created"."<br>";
    $q="CREATE TABLE Ambulance (id INT (4) AUTO_INCREMENT PRIMARY KEY,driverName VARCHAR(30) NOT NULL,RegNum VARCHAR(30) NOT NULL,location VARCHAR(30) NOT NULL),phone INT(30) NOT NULL";
    $result=$conn->query($q);
    if($result)
        {
            echo"Table Succesfully created ";
        }
         
     else
        {    
            echo "Error occured";
        }
        
//     echo "Successfully connection created!"."<br/>";
// //$q="INSERT INTO teacher(id,name,email)VALUES(".$id.",".$name.",".$email.")";

//     $q="INSERT INTO Teacher(name,email) VALUES('".$name."','".$email."')";
// //echo $q;
//     $result=$conn->query($q);
//     if($result)
//         echo " successfully inserted";
//     else
//         echo "Error occured!";
}
$conn->close();
?>