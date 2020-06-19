<?php
if (!isset($_COOKIE['LoginUser'])) {
	echo "You must login";
}else{
?>
<!DOCTYPE html>

<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<?php include 'header.php';?>
</header>

<nav>
	<?php include 'nav.php' ?>
</nav>
<div id="music">
	<p>Welcome <?php echo $_COOKIE['username']; ?> <a href="logout.php"> Logout</a></p>
<audio controls>
	
</div>
<div id="video">
	
</div>
<footer>
	<?php 
	include 'footer.php'
	?>
</footer>
</body>
</html>
<?php
}
?>