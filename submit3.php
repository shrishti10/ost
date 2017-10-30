<?php include'con.php' ?>
<html>
<body>
<?php
	if(isset($_POST['submit3']))
	{
	$room=$_POST['room'];
	$sql = "SELECT count(rid) FROM room where room='$room' and vacant='yes'";
	$query = mysqli_query($connect, $sql);
	while($rs = mysqli_fetch_assoc($query)){
    	$status = $rs['count(rid)'];
	echo "NO. OF VACANT ROOMS:$status";
	}
	}
?>
</body>
</html>