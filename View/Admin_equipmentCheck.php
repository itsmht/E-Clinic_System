<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e_clinic";
$conn=new mysqli($servername,$username,$password,$dbname);//creating the connection
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * FROM equipment";
	$result=$conn->query($q);
	$output='<table border="1" width=100%><tr><th>Equipment Description</th><th>Total Equipment</th><th>Unit Cost</th><th>Total Cost</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["description"]}</td><td>{$row["total"]}</td><td>{$row["unitcost"]}</td><td>{$row["total cost"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "0 results";
}

$conn->close();
echo $output;
?>