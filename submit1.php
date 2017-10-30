<?php include'con.php' ?>
<html>
<body>
<?php
	if(isset($_POST['submit1']))
	{
	$rid=$_POST['rid'];
	mysqli_query($connect,"DELETE FROM room where rid='$rid'");
	if(mysqli_affected_rows($connect) > 0)
	{
	echo "DELETED THE ENTRY OF THE ROOM NO: $rid";
	} 
	else {
	echo mysqli_error ($connect);
	}
	}
	
?>
</body>
</html>