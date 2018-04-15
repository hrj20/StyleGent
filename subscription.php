<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <title>Subscription | Style Gent</title>
  <link rel="icon" href="img/logo.jpg" type="image/jpg"> 
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >      <!-- login -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>                                          <!-- login -->
  <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>                                <!-- login -->
                         
   <link type="text/css" rel="stylesheet" href="css/subscription_style.css" />

</head>
<style type="text/css">input[type='number'] {
    -moz-appearance:textfield;
}</style>
<body>

<h2 style="text-align:center; font-size:50px;">PICK THE ONE THAT SUITS YOU THE BEST</h2>
<form name="place_order" id="place_order" method="POST" action="placeorder.php" role="form"> 
<div class="panel text1" data-toggle="buttons">
  <div class="columns">
    <ul class="price">
      <li class="header">Basic</li>
      <li class="grey" id="">Rs. 3,000</li>
      <li>Monthly (1 Month)</li>
      <li>Don yourself with the latest trend of that month</li>
      <li>You hear from us all about fashion</li>
      <li class="grey"><div id="wrap" class="text-center">
  <!-- Button trigger modal -->
  <label class="btn">
    <span class="glyphicon glyphicon-ok"></span>
    <center style="font-size:25px;"><input type="radio" class="btn hidden " name="sub" id="sub_1" value="1"/>BUY NOW!</center>
  </label>
</div> </li>
  </ul>
</div>

                    
<div class="columns">
  <ul class="price">
    <li class="header">Popular</li>
    <li class="grey">Rs. 7,500</li>
    <li>Quarterly (3 months)</li>
    <li>Sport the Fashion geek look for a quarter</li>
    <li>You hear from us all about fashion</li>
    <li class="grey"><div id="wrap" class="text-center">
  <!-- Button trigger modal -->
<label class="btn">
    <span class="glyphicon glyphicon-ok"></span>
    <center style="font-size:25px;"><input type="radio" class="btn hidden" name="sub" id="sub_2" value="2"/>BUY NOW!</center>
</label>
</div> </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">Rs. 15,000</li>
    <li>Half Yearly(6 months)</li>
    <li>Model out as the gentleman of your group</li>
    <li>You hear from us all about fashion</li>
    
    <li class="grey"><div id="wrap" class="text-center">
  <!-- Button trigger modal -->
<label class="btn">
    <span class="glyphicon glyphicon-ok"></span>
    <center style="font-size:25px;"><input type="radio" class="btn hidden"  name="sub" id="sub_3" value="3"/>BUY NOW!</center>
</label>
</div> </li>
  </ul>
</div>

</div>
<br>
<br>

<br>
<br>


  <div class="container text-center">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
            <fieldset>
        
              <legend style="font-size:50px; color:white;">Address</legend>
         
            
                <div class="form-group">
                    <label class="control-label">Full Name</label>
                    <div class="controls">
                        <input style="color:black;" size="50" id="full-name" name="addr_name" id="addr_name" type="text" placeholder="full name"
                        class="input-xlarge"/>
                        <p class="help-block"></p>
                    </div>
                </div>
             
                <div class="control-group">
                    <label class="control-label">Address Line 1</label>
                    <div class="controls">
                        <input style="color:black;" size="50" id="address-line1" name="addr_line1" id="addr_line1" type="text" placeholder="address line 1"
                        class="input-xlarge"/>
                        <p class="help-block" style="color:white;">Street address, P.O. box, company name, c/o</p>
                    </div>
                </div>
             
                <div class="control-group">
                    <label class="control-label">Address Line 2</label>
                    <div class="controls">
                        <input style="color:black;" size="50" id="address-line2" name="addr_line2" id="addr_line2" type="text" placeholder="address line 2"
                        class="input-xlarge"/>
                        <p class="help-block" style="color:white;">Apartment, suite , unit, building, floor, etc.</p>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label">City / Town</label>
                    <div class="controls">
                        <input style="color:black;" size="37" id="city" name="addr_city" id="addr_city" type="text" placeholder="city" class="input-xlarge"/>
                        <p class="help-block"></p>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label">State / Province / Region</label>
                    <div class="controls">
                        <input style="color:black;" size="37" id="region" name="addr_state" id="addr_state" type="text" placeholder="state / province / region"
                        class="input-xlarge"/>
                        <p class="help-block"></p>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label">Zip / Postal Code</label>
                    <div class="controls">
                        <input style="color:black;" size="30" id="postal-code" name="addr_pincode" id="addr_pincode" type="number" placeholder="zip or postal code" class="input-xlarge" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "6"/>
                        <p class="help-block"></p>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
  </div>

<br>
<br>
 
<div class="container">
    <fieldset>
      <legend style="font-size:50px; color:white;">Payment</legend>
    
      <div class="form-group">
        </br><label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" style="font-size: 20px;" name="cardholdername" id="cardholdername" placeholder="Card Holder's Name"/>
        </div>
      </div>
      <div class="form-group">
        </br><label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" style="font-size: 20px;" name="cardnumber" id="cardnumber" placeholder="Debit/Credit Card Number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"            maxlength = "16"/>
        </div>
      </div>
      <div class="form-group">
        </br><label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
             <select class="form-control col-sm-2" style="font-size: 20px;" name="expirymonth" id="expirymonth">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" style="font-size: 20px;" name="expiryyear" id="expiryyear">

                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      </br><div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="number" class="form-control" style="font-size: 20px;" name="cvv" id="cvv" min ="100"  placeholder="Security Code" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "3"/>
        </div>
      </div>
      </br><div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-primary" style="font-size: 20px;">Pay Now</button>
        </div>
      </div>
    </fieldset>
</div>
</form>

<br>
<br>

<div class="container">
    <fieldset>
      <legend style="font-size:50px; color:white;">Order Box Later ?</legend>
    
      </br><div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">No problem </label>
        <div class="col-sm-3">
        <a href="user.php"><button type="" class="btn btn-primary" style="font-size: 20px;">Back to Orders</button></a>
        <br>
        <br>
        </div>
      </div>
    </fieldset>
</div>

</body>
</html>

