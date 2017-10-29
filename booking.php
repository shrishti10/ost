<html>
<head>
	<title>
		HOTEL BOOKING FORM
	</title>
	<body background="http://localhost/ost/ho.jpg" style="color:white;font-size:125%;text-align:center;">
		<form action="conn.php" method="POST">
			<fieldset>
				<legend>
					PERSONAL DETAILS:
				</legend>
				<label for="name" style="color:yellow;"> NAME:</label><input type="text" name="username" id="name" required autofocus placeholder="ENTER YOUR USERNAME" pattern="[a-zA-Z]{3,}" title="PLEASE ENTER ONLY LETTERS AND MORE THAN 5 CHARACTERS">
				<br>
				<label for="email" style="color:yellow;"> EMAIL:</label><input type="text" name="email" id="email" required placeholder="ENTER YOUR EMAIL ID" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="ENTER VALID EMAIL ID">
				<br>
				<label for="phone" style="color:yellow;">CONTACT NO:</label><input type="tell" name="phone" id="phone" required placeholder="ENTER CONTACT NO." pattern="(9|8|7)[0-9]{9}" title="ENTER VALID NUMBER">
				<br>
				<label for="gender" style="color:yellow;">GENDER:</label>
				<label for="male" style="color:yellow;">MALE</label><input type="radio" name="gen" value="male">
				<label for="female" style="color:yellow;">FEMALE</label><input type="radio" name="gen" value="female">
			</fieldset>
			<br>
			<fieldset>
				<legend>BOOKING DETAILS:
				</legend>
				<label for="date" style="color:yellow;">BOOKING DATE:</label><input type="date" name="date" min="2017-10-31" max="2018-01-15" placeholder="YYYY-MM-DD">
				<br>
				<label for="numberofguest" style="color:yellow;">NO. OF GUEST:</label><input type="number" name="numberofguest" min="1" max="6">
				<br>
				<label type=room" style="color:yellow;">TYPE OF ROOM:</label>
				<select name="room" required>
				<option value="normal">NORMAL ROOM</option>
				<option value="twin">TWIN</option>
				<option value="studio">STUDIO</option>
				<option value="suite">MASTER SUITE</option>
				<option value="luxury">LUXURY ROOM</option>
				</select>
				<p style="color:yellow;">DO YOU REQUIRE MEALS?</p>
				<label for="yes" style="color:yellow;">YES:</label><input type="radio" name="meals" value="yes">
				<label for="no" style="color:yellow;">NO:</label><input type="radio" name="meals" value="no">
				<br>
				<input type="image" src="http://localhost/ost/submit.png" alt="submit" style="width:100px;height:40px;">
			</fieldset>
	</form>
</body>
</head>
