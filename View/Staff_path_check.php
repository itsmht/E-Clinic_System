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
	$q="SELECT * FROM pathology";
	$result=$conn->query($q);
	$output='<table border="1" width=100%><tr><th>Patient Name</th><th>Patient Phone</th><th>Date</th><th>Labs</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["patient_name"]}</td><td>{$row["patient_phone"]}</td><td>{$row["date"]}</td><td>{$row["labs"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "0 results";
}

$conn->close();
echo $output;
?>