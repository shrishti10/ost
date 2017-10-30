<?php include'con.php' ?>
<html>
<body>
<?php
	if(isset($_POST['submit2']))
	{
	$rid=$_POST['rid'];
	$sql = "SELECT vacant FROM room where rid ='$rid'";
	$query = mysqli_query($connect, $sql);
	while($rs = mysqli_fetch_assoc($query)){
    $status = $rs['vacant'];
	echo"VACANT ROOM:$status";
    	}
	}
?>
</body>
</html>