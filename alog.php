<?php
session_start();
?>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<header style="border:3px; border-style:solid; border-color:#FF0000;"><p style="text-align:left;font-size: 300%;"> <img src="b.png" alt="LOGO" height="100" width="60"> CLASH ROYALE</p></header>
<form  action="alog1.php" method="POST">
	<fieldset style="text-align:center" >
		<legend>LOGIN DETAILS</legend>
<p>ENTER UNIQUE ID:<input type="text" name="aid" placeholder="ENTER ADMIN ID"></p>
<p>ENTER USERNAME:<input type="text" name="name" placeholder="ENTER YOUR NAME"></p>
<p>ENTER PASSWORD:<input type="password" name="passwd" placeholder="ENTER YOUR PASSWORD"></p>
<br><input type="submit" name="submit" value="LOG IN">
</fieldset>
</form>
<?php include 'footer.php';?>
</body>
</html>
<?php
session_destroy();
?>
