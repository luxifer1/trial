<!DOCTYPE html>
<html>
<head>
	<title>Artist</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<?php 
		include 'header.php';
		?>
</header>
<nav>
	<?php include 'nav.php';?>
    </nav>
<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label>Artist:</label>
	<input type="text" name="aname" placeholder="Artist Name"><br><br>
	<label>Album :</label>
	<input type="text" name="albname" placeholder="Album Name"><br><br>
	<label>Title :</label>
	<input type="text" name="titlename" placeholder="Title Name"><br><br>
	<label>Music :</label>
	<input type="file" name="music"><br><br>
	<label>coverphoto :</label>
	<input type="file" name="coverphoto"><br><br>
	<input type="submit" name="submit">		
</form>
<?php

$dbc = mysqli_connect('localhost','root','','web');
if ( isset($_POST['submit'])) {
	
##if ($musictype=='audio/mpeg' || $musictype=='video/ogg') {

$artistname =$_POST['aname'];
$albumname =$_POST['albname'];
$title =$_POST['titlename'];
$music=$_FILES['music']['name'];
$coverphoto=$_FILES['coverphoto']['name'];

$musictype=$_FILES['music']['type'];

/*define('UPPATH','img/'); 
$target =UPPATH.$coverphoto;
move_uploaded_file($_FILES['coverphoto']['tmp_name'], $target); */

define('UPPATH2','music/'); 
$target2 =UPPATH2.$music;
echo UPPATH2.'<br/>'.$musictype;
move_uploaded_file($_FILES['music']['tmp_name'], $target2);

$query ="INSERT INTO music (Artist,Album,Title,Music,coverphoto) 
VALUES('$artistname','$albumname','$title','$music','$coverphoto')
";
mysqli_query($dbc,$query);
#echo "the music is successfull upload $artistname";

}
mysqli_close($dbc);
?>
</body>
</html>