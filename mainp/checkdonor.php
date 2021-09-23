<?php 
ob_start();
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
($conn = mysqli_connect( $db_host, $db_user, $db_pass ));
 
   ($db_sel = mysqli_select_db($conn , "charity"));
   	 // echo "database selected ";
    //else
   	  //echo "data base not selected";

//else
 //	echo "unable connect database";	
 $query="SELECT * FROM donor WHERE ID ='".$_POST['ID']."'";
if($sql = mysqli_query($conn,$query))
   {
   	  $value = mysqli_fetch_assoc($sql);
      $code = $value['pin'];
      
    
    
    }
      
else
 	echo "no such user exist";
if($_POST['pin'] == $code )
   {
     
     echo "succesfully login";
     ?>
     <!DOCTYPE html>
      <html>
      <head>
        <title>donor portal</title>
        <link rel="stylesheet" type="text/css" href="joe.css">
      </head>
      <body>
        <div class="rule">
        <h1>welcome to online charity management system</h1>
        <a href="list.php"><button id="dark">check list of NGOs and requirements</button></a>
        <h2>technical support</h2>
     <label for="complaints" id="cha">Any complaints </label>
     <input type="text" name="complaints">
     <p><a href=" www.google.com">click here for FAQs </a></p>
      <button id="ele">submit</button>
    </div>
      </body>
      </html> 
      <?php
   } 
else
   	echo "wrong password or email ID"; 
    

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
/*if($_POST['user']== "manish")
	
		if($_POST['code']=="manish100")
		echo	$_SESSION['email']=$_POST['user'];
			echo "succesfully login";
		else
			echo "wrong password";
	 
else
	echo "email ID is not valid";

 */
?>
