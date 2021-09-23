<!DOCTYPE html>
<html>
<head>
	<title>list of Ngos</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<table border="2">
	<th>name of ngo</th>
	<th>requirement</th>
	<th>payment</th>
<?php  
$conn=mysqli_connect("localhost","root","","charity");
if($conn-> connect_error)
{
	die("Connection failed:". $conn-> connect_error);
}
$query="SELECT org,req from ngo";
$result=$conn->query($query);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["org"] ."</td><td>". $row["req"] . "</td><td><a href='payment.php'>click to donate</a></td></tr>";
	}
	echo "</table>";
}
else
{
	echo "0 result";
}
$conn-> close();
?>
</table>
</body>
</html>