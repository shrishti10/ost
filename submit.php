<?php include'con.php' ?>
<?php
	if(isset($_POST['submit']))
	{
		$rid=$_POST['rid'];
		$room=$_POST['room'];
		mysqli_query($connect,"INSERT INTO room (rid,room,vacant) VALUES ('$rid','$room','yes')");
		if(mysqli_affected_rows($connect) > 0)
			{
		echo"ROOM ADDED";
			}
		else{
			echo mysqli_error ($connect);
			}
	}
?>