<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="css/registrationstyle.css">
</head>
<body>
	<h1>Registration form</h1>
	<div class="register">
		<h2>Register Here</h2>
		<form method="post" id="register" action="register.php">
			<label>First Name:</label><br>
			<input type="text" name="fname" id="name" placeholder="John"><br><br>
			<label>Last Name:</label><br>
			<input type="text" name="lname" id="name" placeholder="Wick"><br><br>
			<label>Phone Number:</label><br>
			<select id="ph">
				<option>+91</option>
				<option>+44</option>
				<option>+93</option>
				<option>+58</option>
			</select>
			<input type="Number" name="number" id="num" placeholder="123456789"><br><br>
			<label>Email:</label><br>
			<input type="Email" name="email" id="name" placeholder="johnwick@gmail.com"><br><br>
			<label>Password</label><br>
			<input type="password" name="pass" id="name" placeholder="Password"><br><br>
			<label>Re-enter the password</label><br>
			<input type="password" name="repass" id="name" placeholder="Password"><br><br>
			<input type="submit" value="Submit" id="sub">
		</form>
	</div>
</body>
</html>

