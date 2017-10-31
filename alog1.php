<?php
$uid=$_POST['aid'];
$uname=$_POST['name'];
$password=$_POST['passwd'];
session_start();
$con=mysqli_connect("localhost","root","Sahil@1","project");
$result=mysqli_query($con,"SELECT * FROM `admin1` WHERE `aid`='$uid' && `name`='$uname' && `pass`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login successful for user $uname.";
	$_SESSION['log']=1;
	header("refresh:2;url=room.php");

}
else
{
	echo "please fill proper details";
	header("refresh:2;url=alog.php");
}
?> 
