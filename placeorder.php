<?php
session_start();

$name=$_SESSION['name'];
$id=$_SESSION['id'];
$email=$_SESSION['email'];
$sub=$_POST['sub'];
$addr_name=$_POST['addr_name'];
$addr_line1=$_POST['addr_line1'];
$addr_line2=$_POST['addr_line2'];
$addr_city=$_POST['addr_city'];
$addr_state=$_POST['addr_state'];
$addr_pincode=$_POST['addr_pincode'];
$cardholdername=$_POST['cardholdername'];
$cardnumber=$_POST['cardnumber'];
$expirymonth=$_POST['expirymonth'];
$expiryyear=$_POST['expiryyear'];
$cvv=$_POST['cvv'];

if(empty($sub) || empty($addr_name) || empty($addr_line1) || empty($addr_line2) || 
	empty($addr_city) ||   empty($addr_state) || empty($addr_pincode) || empty($cardholdername) || 
	empty($cardnumber) || empty($expirymonth) || empty($expiryyear) || empty($cvv))
{	
	echo '<script type="text/javascript">alert("Please fill all fields");</script>';
	echo '<script type="text/javascript">window.location="subscription.php";</script>';
}
else
{
	$connect=mysqli_connect("localhost","root","","stylegentdb") or die("Connection Error");
	$query="UPDATE stylegentdb.user SET subscription='$sub', addr_name='$addr_name',addr_line1='$addr_line1',addr_line2='$addr_line2',addr_city='$addr_city',
	addr_state='$addr_state',addr_pincode='$addr_pincode',cardholdername='$cardholdername', cardnumber='$cardnumber',expirymonth='$expirymonth',
	expiryyear='$expiryyear',cvv='$cvv'  WHERE id='$id'";
	$execute=mysqli_query($connect,$query) or die (mysqli_error($connect));

	echo '<script type="text/javascript">alert("Order Placed Successfully");</script>';
	echo '<script type="text/javascript">window.location="user.php";</script>';

  function getItems($noi){
  global $name,$id;
  //$lower=array("Black","Brown","Gray","Tan","Green","Blue","Navy","Red","Yellow","White","Any Color");
  //$upper=array("Black","Gray","Brown","Tan","Red","Purple","Green","Blue","Navy","Orange","Pink","White","Any Color");
  
  $inventory=array("shoes","jeans","pants","shorts","shirts","casual","sport_c","accessories");
  $shoes= array("1","2","3","4","5");
  $jeans= array("1","2");
  $pants=array("1","2","3","4","5");
  $shirts=array("1","2","3","4");
  $casual= array("1","2","3","4","5","6","7","8");
  $sport_c= array("1","2","3");
  $accessories=array("1","2","3","4","5","6");
  $shorts=array("1","2","3");
  $selected=array();
              if($noi=="2"){
              # if number of items is 2 the nselect what two items should be sent
              for($i=1;$i<=2;$i++){
                $item = array_rand($inventory);
                array_push($selected,$inventory[$item]);
              }
              // echo "The ITEMS SELECTED ARE:";
              // print_r($selected);
              // echo "The Subitems selected are:";

              if($selected[0]=="shoes" || $selected[1]=="shoes"){
                #($shoes);
              $rnd=array_rand($shoes);
              $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shoes where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shoes (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="jeans" || $selected[1]=="jeans"){
                #($jeans);
              $rnd=array_rand($jeans);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.jeans where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.jeans (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="pants" || $selected[1]=="pants"){
                #($pants);
              $rnd=array_rand($pants);
              $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.pants where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.pants (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
                }

              if($selected[0]=="shirts" || $selected[1]=="shirts"){
                #($shirts);
              $rnd=array_rand($shirts);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shirts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shirts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="casual" || $selected[1]=="casual"){
                #($casual);
              $rnd=array_rand($casual);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.casualshirts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.casualshirts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
                }

              if($selected[0]=="sport_c" || $selected[1]=="sport_c"){
                #($sport_c);
              $rnd=array_rand($sport_c);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.sportcoats where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.sportcoats (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }   
              }

              if($selected[0]=="accessories" || $selected[1]=="accessories"){
                #($accessories);
              $rnd=array_rand($accessories);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.accessories where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.accessories (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }   
              }

              if($selected[0]=="shorts" || $selected[1]=="shorts"){
                #($shorts);
              $rnd=array_rand($shorts);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shorts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shorts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }   
              }
            }

            else if ($noi == "3") {
              # if number of items is 3 then selecting what 3 items should be passed
              for($i=0;$i<3;$i++){
                $item = array_rand($inventory);
                array_push($selected,$inventory[$item]);
              }
              // echo "The ITEMS SELECTED ARE:";
              // print_r($selected);
              // echo "The Subitems selected are:";
              if($selected[0]=="shoes" || $selected[1]=="shoes" || $selected[2]=="shoes"){
                #($shoes);
              $rnd=array_rand($shoes);
              $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shoes where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shoes (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="jeans" || $selected[1]=="jeans" || $selected[2]=="jeans"){
                #($jeans);
              $rnd=array_rand($jeans);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.jeans where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.jeans (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="pants" || $selected[1]=="pants" || $selected[2]=="pants"){
                #($pants);
              $rnd=array_rand($pants);
              $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.pants where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.pants (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
              }

              if($selected[0]=="shirts" || $selected[1]=="shirts" || $selected[2]=="shirts"){
                #($shirts);
              $rnd=array_rand($shirts);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shirts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shirts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="casual" || $selected[1]=="casual" || $selected[2]=="casual"){
                #($casual);
              $rnd=array_rand($casual);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.casualshirts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.casualshirts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
              }

              if($selected[0]=="sport_c" || $selected[1]=="sport_c" || $selected[2]=="sport_c"){
                #($sport_c);
              $rnd=array_rand($sport_c);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.sportcoats where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.sportcoats (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
              }

              if($selected[0]=="accessories" || $selected[1]=="accessories" || $selected[2]=="accessories"){
                #($accessories);
              $rnd=array_rand($accessories);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.accessories where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.accessories (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }   
              }

              if($selected[0]=="shorts" || $selected[1]=="shorts" || $selected[2]=="shorts"){
                #($shorts);
              $rnd=array_rand($shorts);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shorts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shorts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }   
              } 
           }

            else{
              # if number of items is 4 then selecting what 4 items should be passed
              for($i=0;$i<=3;$i++){
                $item = array_rand($inventory);
                array_push($selected,$inventory[$item]);
              }
              // echo "The ITEMS SELECTED ARE:";
              // print_r($selected);
              // echo "The Subitems selected are:";
              if($selected[0]=="shoes" || $selected[1]=="shoes" || $selected[2]=="shoes" || $selected[3]=="shoes"){
                #($shoes);
              $rnd=array_rand($shoes);
              $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shoes where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shoes (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="jeans" || $selected[1]=="jeans" || $selected[2]=="jeans" || $selected[3]=="jeans"){
                #($jeans);
              $rnd=array_rand($jeans);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.jeans where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.jeans (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }               
                }

              if($selected[0]=="pants" || $selected[1]=="pants" || $selected[2]=="pants" || $selected[3]=="pants"){
                #($pants);
               $rnd=array_rand($pants);
              $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.pants where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.pants (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="shirts" || $selected[1]=="shirts" || $selected[2]=="shirts"|| $selected[3]=="shirts"){
                #($shirts);
              $rnd=array_rand($shirts);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shirts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shirts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  } 
              }

              if($selected[0]=="casual" || $selected[1]=="casual" || $selected[2]=="casual"|| $selected[3]=="casual"){
                #($casual);
              $rnd=array_rand($casual);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.casualshirts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.casualshirts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
              }

              if($selected[0]=="sport_c" || $selected[1]=="sport_c" || $selected[2]=="sport_c" || $selected[3]=="sport_c"){
                #($sport_c);
              $rnd=array_rand($sport_c);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.sportcoats where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.sportcoats (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
              }
              if($selected[0]=="accessories" || $selected[1]=="accessories" || $selected[2]=="accessories" || $selected[3]=="accessories"){
                #($accessories);
              $rnd=array_rand($accessories);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.accessories where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.accessories (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }
              }

              if($selected[0]=="shorts" || $selected[1]=="shorts" || $selected[2]=="shorts" || $selected[3]=="shorts"){
                #($shorts);
              $rnd=array_rand($shorts);
                $connect=mysqli_connect("localhost","root","","stylegent_inventory") or die("Connection Error");
                  $query="SELECT name , path FROM stylegent_inventory.shorts where id='$rnd'";
                  $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  $numrows=mysqli_num_rows($execute);
                  if($numrows>0){
                  while($row=mysqli_fetch_assoc($execute)) { 
                  $itempath=$row['path'];
                  $itemname=$row['name'];
                  $connect=mysqli_connect("localhost","root","","stylegent_orders") or die("Connection Error");
              $query="INSERT INTO stylegent_orders.shorts (id,name,c_name,path) VALUES ('$id','$itemname','$name','$itempath')";
              $execute=mysqli_query($connect,$query) or die(mysqli_error($connect));
                  }
                  }   
                }
                
              }       
  }

  $number_of_items=array("2","3","4");
          if($sub == 1){
            #1 Month Subscription
            echo "Thanks You will recieve one box in the upcoming month";
            $noi= array_rand($number_of_items);
            getItems($noi);
          }

          elseif ($sub == 2) {
            # 3 month subscription
            echo "Thanks You will recieve three boxes in the upcoming 3 months ";
            for ($i=1; $i <=3; $i++){
              echo "<h5> MONTH<h5>";
              echo $i;
              $noi=  array_rand($number_of_items);
              getItems($noi);
            }
          }

          elseif ($sub == 3) {
            # 6 month subscription
            echo "Thanks You will recieve three boxes in the upcoming 3 months ";
            for ($i=1; $i <=6; $i++){
              echo "<h5> MONTH<h5>";
              echo $i;
              $noi= array_rand($number_of_items);
              getItems($noi);
            }

          }

}

$name=$_SESSION['name'];
$email=$_SESSION['email'];
$sub=$_POST['sub'];

?>