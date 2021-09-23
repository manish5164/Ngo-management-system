<?php 
$req = $_POST['req'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost','root','','charity');
$query = "SELECT pass FROM ngo where pass='".$_POST['pass']."'";
$sql = mysqli_query($con,$query) ;
$value = mysqli_fetch_assoc($sql) ;
$code = $value['pass'];
if($code = $_POST['pass'])
	{
		$query1="UPDATE ngo SET req = '$req' WHERE pass = '$pass'";
		$run=mysqli_query($con,$query1);
		if($run == TRUE)
		{
			echo "requirement submitted ";
		}
		else
			echo "ERROR OCCURED";
	}


 ?>