<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,"register");

if(isset($_POST['login'])){

$phone=$_POST['phno'];
$pass=$_POST['password']; 

$q="select * from user where phone='$phone' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
	header('location: homepage.php');
}
else
{
	?>
	<script>alert("You have not registered");</script>
	<?php
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet"  href="css/loginstyle.css">
</head>
	<body>
		<div class="container">


		
	<div class="fallingLeaves">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	
	
	</div>
	
</div>	
		<div class="login-box">
			<img src="avatar.png" class="avatar">
			<h1>Login</h1>
			<form action="" method="post">
				<i class="fa fa-user" aria-hidden="true"></i>
				<p>Phone Number</p>
				<input type="text" placeholder="Phone number" name="phno" value="" required>
				<i class="fa fa-lock" aria-hidden="true"></i>
				<p>Password</p>
				<input type="password" placeholder="Password" name="password" value="" required>
			   <input class="btn" type="submit" name="login" value="Login">
			<a href="registration.php">new user!! Register here</a>
		</form>
		</div>
	</body>
</html>

