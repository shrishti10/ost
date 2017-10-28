<html>
<head>
	<title>
		HOTEL BOOKING FORM
	</title>
	<body>
		<form action="home.php" method="POST">
			<fieldset>
				<legend>
					PERSONAL DETAILS:
				</legend>
				<label for="name"> USERNAME:</label><input type="text" name="username" id="name" required autofocus placeholder="ENTER YOUR USERNAME" pattern="[a-zA-Z]{5,}" title="PLEASE ENTER ONLY LETTERS AND MORE THAN 5 CHARACTERS">
				<label for="email"> EMAIL:</label><input type="text" name="email" id="email" required placeholder="ENTER YOUR EMAIL ID" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="ENTER VALID EMAIL ID.">
				<label for="phone">CONTACT NO:</label><input type="tell" name="phone" id="phone" required placeholder="ENTER CONTACT NO." pattern="(9|8|7)[0-9]{9}" title="ENTER VALID NUMBER">
				<select name="STATE" required>
				<option value="punjab">PUNJAB</option>
				<option value="haryana">HARYANA</option>
				<option value="delhi">DELHI</option>
				<option value="chandigarh">CHANDIGARH</option>
				<option value="uttrakhand">UTTRAKHAND</option>
				</select>
			</fieldset>
			<br>
			<fieldset>
				<legend>BOOKING DETAILS:
				</legend>
				<label for="date">BOOKING DATE:</label><input type="date" name="date" min="2017-10-28">
				<label for="numberofguest">NO. OF GUEST:</label><input type="number" name="numberofguest" min="1" max="6">
				<p>DO YOU REQUIRE MEALS?</p>
				<label for="yes">YES:</label><input type="radio" name="meals" value="yes">
				<label for="no">NO:</label><input type="radio" name="meals" value="no">
				<br>
				<label for="balcony">DO YOU NEED BALCONY?</label><input type="checkbox" name="balcony" value="yes" checked>
				<br>
				<input type="image" name="" alt="submit">
			</fieldset>
	</body>
</head>