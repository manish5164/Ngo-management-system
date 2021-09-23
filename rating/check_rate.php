<?php 
$objectives        = $_POST['objectives'];
$Participation     = $_POST['Participation'];
$topic_covered     = $_POST['topic_covered'];
$materials         = $_POST['materials'];
$helpful           = $_POST['helpful'];
$trainer_knowledge = $_POST['trainer_knowledge'];
$trainer_prepared  = $_POST['trainer_prepared'];
$time              = $_POST['time'];
$location          = $_POST['location'];

$con = mysqli_connect('localhost','root','','collection');

$query = "INSERT INTO `claw`(`objectives`, `Participation`, `topic_covered`, `materials`, `helpful`, `trainer_knowledge`, `trainer_prepared`, `time`, `location`) VALUES ('$objectives','$Participation ','$topic_covered','$materials ','$helpful ','$trainer_knowledge ','$trainer_prepared','$time ','$location ' )";
$run = mysqli_query($con,$query);
if($run == TRUE)
	echo "Feedback submited successfully";
else
	echo "ERROR !!!!";

 ?>