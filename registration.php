<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if(empty($name) || empty($email) || empty($password) || empty($password2)){
	echo '<script type="text/javascript">alert("Please fill all the fields");</script>';
	echo '<script type="text/javascript">window.location="home.php";</script>';
}

if(!empty($name) && !empty($email) && !empty($password) && !empty($password2)){
	$connect=mysqli_connect("localhost","root","","stylegentdb") or die("Connection Error");
	$checkquery="SELECT * FROM stylegentdb.user WHERE email='$email'";
	$executequery=mysqli_query($connect,$checkquery) or die(mysqli_errno($connect));
	$numrows=mysqli_num_rows($executequery);
	if($numrows>0){
		echo '<script type="text/javascript">alert("User already exists");</script>';
		echo '<script type="text/javascript">window.location="home.php";</script>';
	}
	else{

		if($password!=$password2)
		{
		echo '<script type="text/javascript">alert("Passwords do not match");</script>';
		echo '<script type="text/javascript">window.location="home.php";</script>';	
		}

	$query="INSERT INTO stylegentdb.user (name,email,password) VALUES ('$name','$email','$password')";
	$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
	session_start();
	$query="SELECT id FROM stylegentdb.user WHERE email='$email'";
	$execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
	$numrows=mysqli_num_rows($execute);
	if($numrows!=0){
		$row=mysqli_fetch_array($execute);
		$id=$row['id'];
	}
	$_SESSION['loggedin'] = true;
	$_SESSION['id']=$id;
	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	
	echo '<script type="text/javascript">alert("Registration Complete");</script>';
	echo '<script type="text/javascript">window.location="dna.php";</script>';

$name=$_SESSION['name'];
$email=$_SESSION['email'];


}
}

?>