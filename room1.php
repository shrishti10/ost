<html>
<head>
<title>TASK FIELD</title>
</head>
<body>
    <?php
	if(isset($_POST['aroom']))
	{
    ?>
	<html>
	<head>	<title>Adding room</title>  </head>
	<body>
	<form action="submit.php" method="POST">
	<fieldset>
	<legend>ROOM DETAILS:</legend>
	<br>ROOM NO:<input type="text" name="rid" placeholder="Enter the room no." >
	<br>TYPE OF ROOM:<select name="room" required>
		<option value="normal">NORMAL ROOM</option>
		<option value="twin">TWIN</option>
		<option value="studio">STUDIO</option>
		<option value="suite">MASTER SUITE</option>
		<option value="luxury">LUXURY ROOM</option></select>
	<br><input type="submit" value="SUBMIT" name="submit">
	</fieldset>
	</form>
   	</body>
	</html>
	<?php
	}
	if(isset($_POST['droom']))
	{
        ?>
	<html>
	<head> <title>Deleting room</title> </head>
	<body>
	<form action="submit1.php" method="POST">
	<fieldset>
	<legend>ROOM DETAILS:</legend>
	<br>ROOM NO:<input type="text" name="rid" placeholder="Enter the room no." >
	<br><input type="submit" value="SUBMIT" name="submit1">
	</fieldset>
	</form>
	</body>
	</html>
	<?php
	}
	if(isset($_POST['vacant']))
	{
        ?>
	<html>
	<head> <title>Room Status</title> </head>
	<body>
	<form action="submit2.php" method="POST">
	<fieldset>
	<legend>ROOM DETAILS:</legend>
	<br>ROOM NO:<input type="text" name="rid" placeholder="Enter the room no." >
	<br><input type="submit" value="SUBMIT" name="submit2">
	</fieldset>
	</form>
	</body>
	</html>
	<?php
	}
	if(isset($_POST['countroom']))
	{
        ?>
	<html>
	<head> <title>Room Status</title> </head>
	<body>
	<form action="submit3.php" method="POST">
	<fieldset>
	<legend>ROOM DETAILS:</legend>
	TYPE OF ROOM:<select name="room" required>
		<option value="normal">NORMAL ROOM</option>
		<option value="twin">TWIN</option>
		<option value="studio">STUDIO</option>
		<option value="suite">MASTER SUITE</option>
		<option value="luxury">LUXURY ROOM</option></select>
	<br>VACANT:<br>
	<label for="yes">YES:</label><input type="radio" name="vacancy" value="yes">
	<label for="no">NO:</label><input type="radio" name="vacancy" value="no">	
	<br><input type="submit" value="SUBMIT" name="submit3">
	</fieldset>
	</form>
	</body>
	</html>
        <?php
	}
	?>
</body>
</html>