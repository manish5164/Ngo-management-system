<?php 
$name=$_POST['name'];
$conn=mysqli_connect("localhost","root","","charity");
$query="SELECT SUM(amount) from donor group by ngo having ngo='$name' "; 
$sql=mysqli_query($conn,$query) ;
	
$value=mysqli_fetch_assoc($sql) ;
  
echo $value['SUM(amount)']; 

 ?>
 