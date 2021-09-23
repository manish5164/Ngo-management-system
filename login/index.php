<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>
<div class="special">
    <div class="style">
    <h1 id="header" >STUDENT LOGIN </h1>
    <form action="check_login.php" method="post">
	<p><label for="use" ><b id="l1">Username:</b></label>
	    <input type="text" name="user" placeholder="username" id="use"></p>
	<p><label for="id"> <b>Email:</b></label>
		<input type="email" name="emailid" id="id" placeholder="email" required></p>
	<p><label for="secret"><b> Password:</b></label>
		<input type="password" name="code" id="secret" placeholder="password" minlength="8" required></p>
	 <button>log in</button>
	 
	</div>

</div>

</body>
</html>  