<?php
session_start();
?>

<?php
$email=$_POST['email'];
$password=$_POST['password'];
// $password=md5($password);
if(empty($email) || empty($password)){
	echo '<script type="text/javascript">alert("Please fill all the fields");</script>';
	echo '<script type="text/javascript">window.location="home.php";</script>';
}

if($email && $password){
	$connect=mysqli_connect("localhost","root","","stylegentdb") or die("Connection Error");
	$query=mysqli_query($connect, "SELECT * FROM user WHERE email='$email'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0){
		$row=mysqli_fetch_array($query);
		$dbemail=$row['email'];
		$dbpassword=$row['password'];
	}

	if($email==$dbemail && $password==$dbpassword){
		//header("location:user.php");
		$_SESSION['loggedin'] = true;
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['name'];
		$_SESSION['email']=$row['email'];
		$_SESSION['password']=$row['password'];
		echo '<script type="text/javascript">alert("Login Successful");</script>';
		echo '<script type="text/javascript">window.location="user.php";</script>';
	}

	else{
		echo '<script type="text/javascript">alert("Login Failed");</script>';
		echo '<script type="text/javascript">window.location="home.php";</script>';

	}
}
?>