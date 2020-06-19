<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<?php 
		include 'header.php';
		?>
	</header>
	<h3>Are you a new member?
	<a href="registration.php">Sign up</a></h3>
	<p>Are you already a member ?login</p>
	<form action="login.php" method="POST" enctype="multipart/form-data">
	<fieldset>
	<legend>Login</legend>
	<label>UserName:</label>
	<input type="email" name="Email" placeholder="Email"><br><br>
	<label>Password :</label>
	<input type="password" name="password" placeholder="Password"><br><br>
	<input type="submit" name="Login" value="Login">
</fieldset>
</form>
<footer>
	<?php
	 include 'footer.php';
	?>
</footer>
</body>
</html>