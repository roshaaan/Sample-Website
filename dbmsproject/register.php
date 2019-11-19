<?php

session_start();

$con=mysqli_connect('localhost','root','');
header('location:login.php');

mysqli_select_db($con,"register");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phno=$_POST['number'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

$q="select * from user where email='$email' || phone='$phno'";
$result=mysqli_query($con,$q);
//$num=mysqli_num_rows($result);
if($pass!=$repass)
{
	echo "Password not matched";
	exit();
}


else if(!$result || mysqli_num_rows($result)==1)
{
	echo "Already registered";
	exit();
}
else
{
	$qy="insert into user(fname,lname,phone,email,password) values ('$fname' , '$lname' , '$phno' , '$email' , '$pass') ";
	mysqli_query($con,$qy);?>
	<script>alert("You have successfully registered");</script>
	<?php
}


?>