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
 $query="SELECT * FROM ngo WHERE mail='".$_POST['mail']."'";
if($sql = mysqli_query($conn,$query))
   {
   	  $value = mysqli_fetch_assoc($sql);
      $code = $value['pass'];
      
    
    
    }
      
else
 	echo "no such user exist";
if($_POST['pass'] == $code )
   {
     
     echo "<h1>succesfully login</h1>";
     ?>
     <!DOCTYPE html>
     <html>
     <head>
       <title>ngo portal</title>
       <link rel="stylesheet" type="text/css" href="race.css">
     </head>
     <body>
      <div class="active">
        <form action="req.php" method="post">
     <h1>welcome to online charity management System</h1>
     <label for="req"> Enter the Rquirement Request </label>
     <input type="text area" name="req">
      <label for="pass"> Confirm password </label>
     <input type="password" name="pass">
     <p><button id="spr">submit</button></p>
   </form>
     <h2>technical support</h2>
     <label for="complaints" id="cha">Any complaints </label>
     <input type="text" name="complaints">
     <p><a href=" www.google.com">click here for FAQs </a></p>
      <button id="ele">submit</button>
     <P> <a href="total.php"><button id="thump">TOTAL DONATED AMOUNT</button></a></P>
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
