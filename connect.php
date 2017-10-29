<?php include'con.php' ?>
<?php
 
// create a variable
$name=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gen'];
$bookdate=$_POST['date'];
$numberofguest=$_POST['numberofguest'];
$room=$_POST['room'];
$meals=$_POST['meals'];
mysqli_query($connect,"INSERT INTO booking (name,email,phone,gender,bookdate,numberofguest,room,meals) VALUES ('$name','$email','$phone','$gender','$bookdate','$numberofguest','$room','$meals')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>BOOKING REGISTERED</p>";
	} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}