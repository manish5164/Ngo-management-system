<!DOCTYPE html>
<html>
<head>
	<title>secure payment</title>
	<link rel="stylesheet" type="text/css" href="pay.css">
</head>
<body>
	<div class="run">
<h1>secure payment</h1>
<form action="checkpay.php" method="post">
<p><label for="ngo">Confirm NGO name</label></p>
<p><input type="text" name="ngo"></p>
<p><label for="acc">ACCOUNT NUMBER</label></p>
<p><input type="text" name="acc"></p>
<p><label for="ifc">IFSC CODE</label></p>
<p><input type="text" name="ifc"></p>
<p><label for="br">BRANCH</label></p>
<p><input type="text" name="br"></p>
<p><label for="amount">DONATION AMOUNT</label></p>
<p><input type="text" name="amount"></p>
<p><label for="pin">CONFIRM PASSWORD</label></p>
<p><input type="password" name="pin"></p>
<button>PAYMENT</button>
</div>
</body>
</html>