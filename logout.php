<?php
session_start();
echo "<script> window.confirm('Are you sure to logout?');</script>";
unset($_SESSION['name']);
$_SESSION['loggedin'] = false;
unset($_SESSION['loggedin']);
session_destroy();
header("location:home.php");
?>