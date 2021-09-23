<?php
ob_start();
session_start(); 
$org        = $_POST['org'];
$mail     = $_POST['mail'];
$pass     = $_POST['pass'];
$no        = $_POST['no'];
$img           = $_POST['img'];
$acc_no = $_POST['acc_no'];
$Ifsc  = $_POST['Ifsc'];
$branch             = $_POST['branch'];
$type          = $_POST['type'];
$c=0;


$con = mysqli_connect('localhost','root','','charity');
$query="SELECT * FROM ngo WHERE mail ='".$_POST['mail']."'";
$sql = mysqli_query($con,$query);
$value = mysqli_fetch_assoc($sql);
$email= $value['mail'];     
if ($_POST['mail'] = $email) 
{  
  echo "user already exist";	
}

else
  	{	
  		$query1 = "INSERT INTO `ngo`(`org`, `mail`, `pass`, `no`, `img`, `type`, `acc_no`, `Ifsc`, `branch`) VALUES ('$org','$mail ','$pass','$no','$img ','$type ','$acc_no','$Ifsc ','$branch ' )";
		$run = mysqli_query($con,$query1);
		if($run == TRUE)
		echo "successfully signed up";	
		else
		echo "ERROR !!!!";
	}    
?>





