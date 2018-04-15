<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <title>Account | Style Gent</title>
  <link rel="icon" href="img/logo.jpg" type="image/jpg"> 
   <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<!--   1 --><script src="js/bootstrap.min.js"></script>  
<!-- 3 --><link rel="stylesheet" href="css/bootstrap.min.css">    
  <!-- 4 --><link rel="stylesheet" href="font-awesome/css/font-awesome.css" > 
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" >      <!-- login -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>                                          <!-- login -->
  <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>                                       <!-- login -->
  <link type="text/css" rel="stylesheet" href="css/user_style.css" />
  <script src="js/modernizr.custom.js"></script>
  <script src="js/classie.js"></script>


</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar1">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <i class="fa fa-bars" style="width:20px"></i>
      </button>
       <li> <a class="active navbar-brand" href="home.php"  style="font: 22px Lora; padding: 12px 16px;"><b>STYLE GENT</b></a></li>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="subscription.php" id="placeorder">Place Order</a></li>
     <!--  <li><a href="#subscription">Account Settings</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="padding: 12px 16px;">
          <i class="fa fa-user" width="10%;"></i><?php
             if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
             echo " " . $name;
             ?>
             <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" style="z-index:10;">
          <li><a href="logout.php" id="logout"><i class="fa fa-power-off" width="10%;"></i>&nbsp<b style="font-size: 18px;">Log out</b></a></li>
          </ul>
             <?php
           }
           else{
            echo "Unregistered"; 
           }
          ?>
        </li>
      </ul>  
  </div>
</div>
</nav>

<div>
 <div class="row ">
  <div class="introtext1 col-md-12 col-sm-10 container text-center">
    <p><b>Order History</b></p>
  </div>
</div>
</div>


<div class="imagegallery container-fluid">
<table class="table borderless products" style="margin: auto; padding: 0; ">
<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main">
        <h3><u>CASUAL SHIRTS</u></h3>
        <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM casualshirts where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
        if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
        <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main ">
        <h3><u>DRESS SHIRTS</u></h3>
           <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM shirts where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
        if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
        <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main">
        <h3><u>JEANS</u></h3>
        <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM jeans where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
        if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
        <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main">
        <h3><u>PANTS</u></h3>
              <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM pants where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
        if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
        <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main">
        <h3><u>SHORTS</u></h3>
            <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM shorts where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
       if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
        <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main">
        <h3><u>SPORT COATS</u></h3>
           <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM sportcoats where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
       if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
       <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>


<tr>  
<td> <div class="container-fluid text-center row">
      <div class="main">
        <h3><u>SHOES</u></h3>
            <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM shoes where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
        if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
       <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

<tr>  
<td> <div class="container-fluid text-center row ">
      <div class="mainw">
        <h3><u>ACCESSORIES</u></h3>
             <?php
        $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
        $query="SELECT name,path FROM accessories where id='$id'";
        $execute=mysqli_query($connect,$query) or die(mysqli_errno($connect));
        $numrows=mysqli_num_rows($execute);
        if($numrows>0){
        while($row=mysqli_fetch_array($execute)) {
        ?>
        <div class="box container">
        <div class="boxInner">
        <?php 
        $itempath=$row['path'];
        $itemname=$row['name'];
        echo '<img src="'.$itempath.'"></img>'; 
        echo '<p>'.$itemname.'</p>';
        ?>
        </div>
        </div>
       <?php
        }
        }
        else{
          echo '<h3>No items yet!</h3>';
        }
        ?>
      </div>
      </div>
</td>
</tr>

</table>
</div>




<script type="text/javascript">
$(function(){
    $('#placeorder').click(function(){
        if(confirm('Are you sure for a style overload?')) {
            return true;
        }

        return false;
    });
});

$(function(){
    $('#logout').click(function(){
        if(confirm('Are you sure to logout?')) {
            return true;
        }

        return false;
    });
});


</script>

</body>
</html>