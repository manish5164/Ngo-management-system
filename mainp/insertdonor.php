<?php  
ob_start();
session_start(); 
$name        = $_POST['name'];
$ID     = $_POST['ID'];
$pin     = $_POST['pin'];
$phno        = $_POST['phno'];



$con = mysqli_connect('localhost','root','','charity');
$query="SELECT * FROM donor WHERE ID ='".$_POST['ID']."'";
$sql = mysqli_query($con,$query);
$value = mysqli_fetch_assoc($sql);
$email= $value['ID'];     
if ($_POST['ID'] = $email) 
{  
  echo "user already exist";	
}

else
  	{	
  		$query1 = "INSERT INTO `donor`(`name`, `ID`, `pin`, `phno`) VALUES ('$name','$ID ','$pin','$phno' )";
		$run = mysqli_query($con,$query1);
		if($run == TRUE)
		echo "successfully signed up";	
		else
		echo "ERROR !!!!";
	}    
?>





