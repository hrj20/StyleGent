<?php
session_start();
$id=$_SESSION['id'];


$bestdescribe=$_POST['acc1'];
// echo "$bestdescribe  ";

$styledescribe = "";
foreach($_POST['acc2'] as $i) {
      $styledescribe .= $i.",";  
}
// echo "$styledescribe  ";

$fitchallenge = "";
 foreach($_POST['acc3'] as $i) {
      $fitchallenge .= $i.",";  
}
// echo "$fitchallenge  ";

$occasion=$_POST['acc4'];
// echo "$occasion  ";

$age=$_POST['age'];
// echo "$age  ";

$height=$_POST['acc6'];
// echo "$height  ";

$weight=$_POST['weight'];
// echo "$weight  ";

$bodytype=$_POST['acc8'];
// echo "$bodytype  ";

$skintone=$_POST['acc9'];
// echo "$skintone  ";

$shirtsize=$_POST['acc10'];
// echo "$shirtsize  ";

$shirtcollar=$_POST['acc11'];
// echo "$shirtcollar  ";

$shirtsleeve=$_POST['acc12'];
// echo "$shirtsleeve  ";

$wearhow=$_POST['acc13'];
// echo "$wearhow  ";

$pantwaist=$_POST['acc14'];
// echo "$pantwaist  ";

$pantinseam=$_POST['acc15'];
// echo "$pantinseam  ";

$pantcut = "";
foreach($_POST['acc16'] as $i) {
      $pantcut .= $i.",";  
}
// echo "$pantcut  ";

$shoesize=$_POST['acc17'];
// echo "$shoesize  ";

$blazerchest=$_POST['acc18'];
// echo "$blazerchest  ";

$blazerlength=$_POST['acc19'];
// echo "$blazerlength  ";

if(empty($bestdescribe) || empty($styledescribe) || empty($fitchallenge) || empty($occasion) || empty($age) ||   empty($height) || empty($weight) || empty($bodytype) || empty($skintone) || empty($shirtsize) || empty($shirtsleeve) || empty($shirtcollar) || empty($wearhow) || empty($pantwaist) || empty($pantinseam) || empty($pantcut) || empty($shoesize) || empty($blazerchest) || empty($blazerlength)){
	echo '<script type="text/javascript">alert("Please provide complete DNA");</script>';
	echo '<script type="text/javascript">window.location="dna.php";</script>';
}
else
{
$connect=mysqli_connect("localhost","root","","stylegentdb") or die("Connection Error");
$query="INSERT INTO stylegentdb.dna (id,bestdescribe,styledescribe,fitchallenge,occasion,age,height,weight,bodytype,skintone,shirtsize,shirtcollar,shirtsleeve,wearhow,pantwaist,pantinseam,pantcut,shoesize,blazerchest,blazerlength) VALUES ('$id','$bestdescribe','$styledescribe','$fitchallenge','$occasion','$age','$height','$weight','$bodytype','$skintone','$shirtsize','$shirtcollar','$shirtsleeve','$wearhow','$pantwaist','$pantinseam','$pantcut','$shoesize','$blazerchest','$blazerlength')";
	$execute=mysqli_query($connect,$query) or die (mysqli_error($connect));
	echo '<script type="text/javascript">alert("DNA Analysis Complete");</script>';
	echo '<script type="text/javascript">window.location="subscription.php";</script>';

}
?>