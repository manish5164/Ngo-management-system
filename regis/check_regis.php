<?php 
ob_start();
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
if($con = mysqli_connect( $db_host, $db_user, $db_pass ))
 {
   if($db_sel = mysqli_select_db($con,"base"))
      echo "database selected ";
   else
      echo "data base not selected";
 }
else
  echo "unable connect database"; 
$query="SELECT * FROM content WHERE user='".$_POST['user']."'";
  if($sql = mysqli_query($con,$query))
      {
        $value = mysqli_fetch_assoc($sql);
        $code = $value['code'];
      $user= $value['user'];
      echo "user exist";
    
    }
      
else
  echo "no such user exist";

if($_POST['code'] = $code )
   {
     $_SESSION['user']=$user;
     echo "done"; 
   } 
else
    echo "wrong password"; 
    

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
/*if($_POST['user']== "manish")
  
    if($_POST['code']=="manish100")
    echo  $_SESSION['email']=$_POST['user'];
      echo "succesfully login";
    else
      echo "wrong password";
   
else
  echo "email ID is not valid";

 */
?>


<link rel="stylesheet" type="text/css" href="man.css">
<div class="design" align="center">
<h1 >succesfully logged in</h1>
<a href="/rating" > <button id=  "lg">submit feedback</button> </a>
<p><a href="logout.php" > <button id="lg">logout</button> </a></p>

</div>
