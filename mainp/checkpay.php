<?php  
$amount=$_POST['amount'];
$acc=$_POST['acc'];
$ifc=$_POST['ifc'];
$br=$_POST['br'];
$pin=$_POST['pin'];
$ngo=$_POST['ngo'];
$conn=mysqli_connect("localhost","root","","charity");
$query = "SELECT pin FROM donor where pin='".$_POST['pin']."'";
$sql = mysqli_query($conn,$query) ;
$value = mysqli_fetch_assoc($sql) ;
$code = $value['pin'];
if($code = $_POST['pin'])
	{
		$query1="UPDATE donor SET amount = '$amount',acc='$acc',ifc='$ifc',br='$br',ngo='$ngo' WHERE pin = '$pin'";
		$run=mysqli_query($conn,$query1);
		if($run == TRUE)
		{
			echo "payment succesfull ";
		}
		else
			echo "ERROR OCCURED";
	}





?>