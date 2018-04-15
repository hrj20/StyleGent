<?php
session_start();
$bg = array('img/banner1.jpg', 'img/banner2.jpg', 'img/banner3.jpg'); 

$i = rand(0, count($bg)-1); 
$selectedBg = "$bg[$i]"; 
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <title>Home | Style Gent</title>
  <link rel="icon" href="img/logo.jpg" type="image/jpg"> 
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<!-- 3 --><link rel="stylesheet" href="css/bootstrap.min.css">    
<!--   1 --><script src="js/bootstrap.min.js"></script>  
  <!-- 4 --><link rel="stylesheet" href="font-awesome/css/font-awesome.css" > 

  
 <!-- 3 --><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- 4 --><link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >      <!-- login -->
  <!-- 2 --><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--  1 --> <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>                                          <!-- login -->
  <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>                                <!-- login -->
                         

  <link type="text/css" rel="stylesheet" href="css/home_style.css" />
<style>

#bgimage {
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 0px; 
    margin: auto;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    background-image: linear-gradient( rgba(30, 40, 50, 0.4),rgba(30, 40, 50, 0.4) ), url(<?php echo $selectedBg;?>);
    background-repeat: no-repeat;
    -webkit-background-size: 100% 100%;
    -moz-background-size: cover;
    -o-background-size: cover;
}
</style>


</head>


<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar1">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <i class="fa fa-bars" style="width:20px"></i>
      </button>
       <li> <a class="active navbar-brand" href="#" id="TopOfPage"  style="font: 22px Lora; padding: 12px 16px;"><b>STYLE GENT</b></a></li>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
      <li><a href="#about">About</a></li>
      <li><a href="#subscription">Subscription</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="style.php">Styles</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
        { ?>
        <i class="fa fa-user" style="width:10px"></i>&nbsp
        <?php
          echo " " . $_SESSION['name'];
          ?>
          <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" style="background: transparent;">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
          <li><a href="user.php" id="logout"><i class="fa fa-shopping-cart" width="10%;"></i>&nbsp<b style="font-size: 18px;">Orders</b></a></li>
          <li><a href="logout.php" id="logout"><i class="fa fa-power-off" width="10%;"></i>&nbsp<b style="font-size: 18px;">Log out</b></a></li>
          </ul>
       <?php }
        else 
        { ?>
           <li><a href="#modal" id="modal_trigger"><i class="fa fa-user" style="width:10px"></i>
          &nbspLogin &nbsp</a></li>
         <?php  }
          ?>
      </ul>  
  </div>
</div>
</nav>

<div id="bgimage">
  <div class="row ">
  <div class="introtext1 col-md-12 col-sm-10 container text-center">
    <p><b>Unlock Your Style Quotient</b></p>
  </div>
</div>
</div>
<div class="col-md-12 container text-center"><button href="#modalstart" id="modal_start" class="button1"><span><b>Get Started</b></span></button></div>




<div class="row">
<div id="about" class="abouttext1 col-md-12 col-sm-10 container-fluid text-center ">
  <center><b>Who We Are</b></center>
  <center><p style="font-size:22px;">Style Gent removes the guesswork altogether.<br> We deliver personalized, high quality clothes and accessories to match your lifestyle, straight at your doorstep.</p></center>
</div>




<div class="tabletext1 row">
  <table class="table col-md-12 col-sm-10 container text-center">
    <tr>
    <td style="background-color:#F2F2F2;"><b style="font-size:25px;">
      <br><1><br>Submit Your Style DNA</b><br><br><p style="font-size:22px;">Our Style DNA Survey will allow us to identify unique traits about you to select clothing items you'll love.</p></td>
    
    <td style="background-image: url(img/step2.png); color: white; background-size: 100% 100%; background-color: rgba(30, 40, 50, 1);"><b style="font-size:25px;">
      <br><2><br>Selected-Styling</b><br><br><p style="font-size:22px;">After analyzing your Style DNA, our algorithm will pick items based on your lifestyle and preferences.</p></td>
    </tr>

    <tr>
      <td style="background-image: url(img/step3.png); color: white; background-size: 100% 100%; background-color: rgba(30, 40, 50, 1);"><b style="font-size:25px;">
        <br><3><br>Convenient Subscriptions </b><br><br><p style="font-size:22px;">Select your preferred subscription in the comfort of your homes.</p></td>

      <td style="background-color:#F2F2F2;"><b style="font-size:25px;">
        <br><4><br>Pay, Dress up, Repeat</b><br><br><p style="font-size:22px;">We know you'll love it.</p></td>
    </tr>
  </table>
</div>






<div class="row">
<div id="subscription" class="substext1">
     <center><b style="font-size:60px;">Subscriptions</b></center></br>
  <table class="table container text-center">

    <tr>
      <td style="background-color:#F2F2F2;"><center><b style="font-size:30px;"><u>Basic</u></b></center><br> <center><p style="font-size:22px;">Every great journey starts with a single step! Consider it a trial but beware, you might get hooked!</br></br><b style="font-size:27px;">Rs.3,000 / 1 Month</br></b></p></center></td>
    </tr>
    
    <tr>
      <td style="background-color:#BFBFBF;"><center><b style="font-size:30px;"><u>Popular</u></b></center><br> <center><p style="font-size:22px;">Get amazed by 3 Boxes in 90 days! Make your friends envious! Perfect for the Man on a budget!</br></br><b style="font-size:27px;">Rs.7,500 / 3 Months</br></b></p></center></td>
    </tr>
    
    <tr>
      <td style="background-color:#F2F2F2;"><center><b style="font-size:30px;"><u>Premium</u></b></center><br> <center><p style="font-size:22px;">How about rocking the entire season with a new look! We will send you a fresh Box every month for half the year!</br></br><b style="font-size:27px;">Rs.15,000 / 6 Months</br></b></p></center></td>
    </tr>
  </table>
</div>
</div>






<div id="contact" class="contacttext1 container-fluid">
  <center></br><b>We love our Customers!</center>
      <p>Drop a note!</p></b><br><br>
  <div class="row">
    <div class="col-sm-5" style="text-align: left; font: 17px 'Poiret One';">
      <p></br><i class="fa fa-map-marker" style="width:10px"></i> Mumbai, India</p>
      <p><i class="fa fa-phone" style="width:10px"></i> +91 9004663322</p>
      <p><i class="fa fa-envelope" style="width:10px"></i>&nbsp mail<b>.</b>stylegent@gmail.com</p>
      <p><i class="fa fa-copyright" style="width:10px"></i>&nbsp 2018 Style Gent. All Rights Reserved</p>
    </div>
    <div class="col-sm-7"> 
      <form name="send_contact" id="send_contact" method="POST" action="sendcontact.php"> 
      <div class="row">
        <div class="col-sm-6 form-group" >
        <b> <input class="form-control" id="name" style="font-size: 18px;" name="name" placeholder="Name..." type="text" required></b>
        </div>
        <div class="col-sm-6 form-group">
        <b><input class="form-control" id="email" style="font-size: 18px;" name="email" placeholder="Email..." type="email" required></b>
        </div>
        </div>
        <b><textarea class="form-control" id="comment" style="font-size: 18px;" name="comment" placeholder="Comment..." rows="5"></textarea></b><br>
        <div class="row">
        <div class="col-sm-12 form-group">
          <button class="button2" type="submit"><span>Send</span></button>
        </div>
      </div>
        </form>
    </div>
  </div>
</div>




<!-- LOGIN POPUP -->
 <div class="container" style="font-family: Poiret One;">
  <div id="modal" class="popupContainer" style="display:none; ">
    <header class="popupHeader">
      <span class="header_title">Login</span>
      <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>
    
    <section class="popupBody">
    
      <!-- Username & Password Login form -->
      <div class="user_login">
        <form name="login_form" id="login_form" method="POST" action="login.php"> 
          <label>Email</label>
          <input type="email" name="email" id="email" />
          <br />

          <label>Password</label>
          <input type="password" name="password" id="password" />
          <br />

        <!--   <div class="checkbox">
            <input id="remember" type="checkbox" />
            <label for="remember">Remember me on this computer</label>
          </div>
 -->
          <div class="action_btns">
            <div class="one_half last"><button type="submit" href="#" class="btn btn_blue" name="login" id="login">&nbspLogin&nbsp</button></div>
            <div class="one_half last"><button type="" href="#" id="register_form" class="btn">Sign up</button></div>
          </div>
        </form>

      </div>

      <!-- Register Form -->
      <div class="user_register">
        <form name="register_form" id="register_form" method="POST" action="registration.php">
          <label>Full Name</label>
          <input type="text" name="name" id="name"/>
          <br />

          <label>Email Address</label>
          <input type="email" name="email" id="email"/>
          <br />

          <label>Password</label>
          <input type="password" name="password" id="password"/>
          <br />

           <label>Re-type Password</label>
          <input type="password" name="password2" id="password2"/>
          <br />

       <!--    <div class="checkbox">
            <input id="send_updates" type="checkbox" />
            <label for="send_updates">Send me occasional email updates</label>
          </div> -->

          <div class="action_btns">
            <div class="one_half last"><button type="submit" href="#" class="btn btn_blue">Register</button></div>
            <div class="one_half"><button type="" href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</button></div> 
          </div>
        </form>
      </div>
    </section>
  </div>
</div>



<!-- SIGNUP POPUP -->
 <div class="container" style="font-family: Poiret One;">
  <div id="modalstart" class="popupContainer" style="display:none; ">
    <header class="popupHeader">
      <span class="header_title">Register</span>
      <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>
     <section class="popupBody">

       <div class="user_start">
        <form name="register_form" id="register_form" method="POST" action="registration.php">
          <label>Full Name</label>
          <input type="text" name="name" id="name"/>
          <br />

          <label>Email Address</label>
          <input type="email" name="email" id="email"/>
          <br />

          <label>Password</label>
          <input type="password" name="password" id="password"/>
          <br />

            <label>Re-type Password</label>
          <input type="password" name="password2" id="password2"/>
          <br />

          <div class="action_btns"> 
            <div class="one_half last" style="margin: auto;"><button type="submit" href="#" class="btn btn_blue">Register</button></div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>




<script type="text/javascript">

  $("#modal_trigger").leanModal({top : 10, overlay : 0.6, closeButton: ".modal_close" });
  $(function(){
    // Calling Register Form
    $("#register_form").click(function(){
      $(".user_login").hide();
      $(".user_register").show();
      $(".header_title").text('Register');
      return false;
    });

    // Going back to Login Forms
    $(".back_btn").click(function(){
      $(".user_login").show();
      $(".user_register").hide();
      $(".header_title").text('Login');
      return false;
    });

  })


   $("#modal_start").leanModal({top : 10, overlay : 0.6, closeButton: ".modal_close" });
  $(function(){
    // Calling Register Form
    $("#register_form").click(function(){
      $(".user_register").show();
      $(".header_title").text('Register');
      return false;
    });

  })



   // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-70
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $(document).ready(function(){
  
  //Click Style Gent to scroll to top
  $('#TopOfPage').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  
});

//close navbar if any option is selected
$(function() {
    $('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none') {
            $(".navbar-toggle").trigger( "click" );
        }
    });
});
  
</script>



</body>
</html>

   