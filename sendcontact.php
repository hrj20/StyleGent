<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];

	$connect=mysqli_connect("localhost","root","","stylegentdb") or die("Connection Error");
	$query="INSERT INTO stylegentdb.contactus (contact_name,contact_email,contact_comment) VALUES ('$name','$email','$comment')";
	$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
	echo '<script type="text/javascript">alert("Thank you!");</script>';
	echo '<script type="text/javascript">window.location="home.php";</script>';

?>

