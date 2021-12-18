<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e-clinic";
$conn=new mysqli($servername,$username,$password,$dbname);//creating the connection
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * FROM noti";
	$result=$conn->query($q);
	$output='<table border="1" width=100%><tr><th>ID</th><th>Date</th><th>Notice</th></tr>';
    //$output='<iframe width="420" height="315" src="https://www.youtube.com/embed/ErxKDbH-iiI"></iframe>';
    
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["id"]}</td><td>{$row["date"]}</td><td>{$row["notice"]}</td></tr>";
            //$output.= "<iframe width="420" height="315" src="https://www.youtube.com/embed/ErxKDbH-iiI"></iframe>";
            
		}
		$output.='</table>';
	}
	else
		echo "0 results";
}

$conn->close();
echo $output;
?>