<?php
session_start();
$id=$_SESSION['id'];
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <title>DNA | Style Gent</title>
 <link rel="icon" href="img/logo.jpg" type="image/jpg"> 
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >      <!-- login -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>  <!-- login -->
  <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>                <!-- login -->
                
 <link type="text/css" rel="stylesheet" href="css/dna_style.css" />

</head>
<body>

<div class="acc1">
		<center style="font-size:50px;">HELP US DECODE YOUR DNA<center>
		<form name="dna_submit" id="dna_submit" method="POST" action="dnasubmit.php"> 
		<button class="accordion" type="button">Which of these best describe you?</button>
		<div class="panel text1" data-toggle="buttons">
				
					<center>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc1" id="acc1_op1" value="least">A. Least fashionable guy in the room</input>
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc1" id="acc1_op2" value="guidance">B. Looking for guidance and smart clothing</input>
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc1" id="acc1_op3" value="busyproffessional">C. Busy professional with no time to shop</input>
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc1" id="acc1_op4" value="stylist">D. Interested in trying a personal stylist</input>
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc1" id="acc1_op5" value="help">E. Partner of someone who needs help</input>
						</label>
						</center></br>
	 </div>

		<button class="accordion" type="button">Which style(s) best describe the look you're going for?</button>
		<div class="panel text1" data-toggle="buttons">
					<center>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op1" value="formal"><img src="img/choice1.jpeg"></input>	
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op2" value="casual"><img src="img/choice2.jpeg"></input>	
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op3" value="casual"><img src="img/choice3.jpeg"></input>	
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op4" value="smartcasual"><img src="img/choice4.jpeg"></input>	
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op5" value="bussinessprofessional"><img src="img/choice5.jpeg"></input>	
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op6" value="formal"><img src="img/choice6.jpeg"></input>	
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op7" value="smartcasual"><img src="img/choice7.jpeg"></input>	
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc2[]" id="acc2_op8" value="formal"><img src="img/choice8.png"></input>	
						</label>
					</center></br>
	 </div>
	 		<button class="accordion" type="button">What fit challenges do you have?</button>
		<div class="panel text1" data-toggle="buttons">
					<center>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc3[]" id="acc3_op1" value="broadshoulders">A. Broad Shoulders</input>	
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc3[]" id="acc3_op2" value="barrelchested">B. Barrel Chested</input>
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc3[]" id="acc3_op3" value="bigbutt">C. Big Butt</input>						
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc3[]" id="acc3_op4" value="nobutt">D. No Butt</input>				
						</label>
						<br/><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc3[]" id="acc3_op5" value="biglegs">E. Big Legs</input>
						</label>
					</center></br>
	 </div>

	 		<button class="accordion" type="button">What occasion should we focus on?</button>
		<div class="panel text1" data-toggle="buttons">
					<center>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc4" id="acc4_op1">A. Work Place</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc4" id="acc4_op2" value="casualworkplace">B. Casual Workplace</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc4" id="acc4_op3" value="datenight">C. Date Night</input>
						</label></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc4" id="acc4_op4" value="nightinthetown">D. Night In The Town</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc4" id="acc4_op5" value="casualweekend">E. Casual Weekend</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc4" id="acc4_op6" value="other">F. Others</input>
						</label>
					</center></br>
	 </div>


		<button class="accordion" type="button">Age</button>
		<div class="panel text1">	
			<label class="text-left"><h2>Enter Age:<h2></label><input  name="age" id="age" class="form-control" type="number" placeholder="Years" style="font-size: 18px;" min="0" max="100">
		 </div>

		<button class="accordion" type="button">Height</button>
		<div class="panel text1" data-toggle="buttons">
			<div class="container">
			<h2>Choose Your Height</h2>
			<div>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op1" value="5.1">5'1"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op2" value="5.2">5'2"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op3" value="5.3">5'3"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op4" value="5.4">5'4"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op5" value="5.5">5'5"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op6" value="5.6">5'6"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op7" value="5.7">5'7"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op8" value="5.8">5'8"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op9" value="5.9">5'9"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op9" value="5.10">5'10"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op9" value="5.11">5'11"</input>
						<br/></label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op9" value="5.12">5'12"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op10" value="6">6</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op11" value="6.1">6'1"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op12" value="6.2">6'2"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op13" value="6.3">6'3"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op14" value="6.4">6'4"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op14" value="6.5">6'5"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op14" value="6.6">6'6"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op14" value="6.7">6'7"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op14" value="6.8">6'8"</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc6" id="acc6_op14" value="6.9">6'9"</input>
						</label>
						</br>
				</div>
		</div>

		</div>

		<button class="accordion" type="button">Weight</button>
		<div class="panel">
		<label><h2>Enter your Weight:<h2></label>
		<input id="weight" name="weight" class="form-control" type="number" placeholder="kgs" style="font-size: 18px;" min="0">  
		</div>

		<button class="accordion" type="button">Body Type</button>
		<div class="panel text1" data-toggle="buttons">
				<br/>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc8" id="acc8_op1" value="thin"><img alt="Thin" src="img/thin.png"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc8" id="acc8_op2" value="average"><img alt="Average" src="img/avg.png"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc8" id="acc8_op3" value="muscular"><img alt="Muscular" src="img/musc.png"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc8" id="acc8_op4" value="big"><img alt="Big" src="img/big.png"></input>
						</label></br></br>
		</div>
		<button class="accordion" type="button"> Skin Tone </button>
		<div class="panel text1" data-toggle="buttons">
			</br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc9" id="acc9_op1" value="light"><img alt="Light Tone" src="img/light_tones.png"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc9" id="acc9_op2" value="mid"><img alt="Mid Tone" src="img/mid_tones.jpg"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc9" id="acc9_op3" value="tan"><img alt="Tan Look"src="img/tan_look.jpg"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc9" id="acc9_op4" value="dark"><img alt="Dark Tone"src="img/dark_tones.jpg"></input>
						</label></br></br>
		</div>
		<button class="accordion" type="button">Shirt Size</button>
		<div class="panel text1">
			<div data-toggle="buttons">
				<center>SIZE</center></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc10" id="acc10_op1" value="sm">SM</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc10" id="acc10_op2" value="lg">LG</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc10" id="acc10_op3" value="xl">XL</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc10" id="acc10_op4" value="xll">XLL</input>
						</label></br></br>
			</div>
			<div data-toggle="buttons">
				<center>COLLAR</center></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op1" value="14">14</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op2" value="14.5">14.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op3" value="15">15</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op4" value="15.5">15.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op5" value="16">16</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op6" value="16.5">16.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op7" value="17">17</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span> 
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op8" value="17.5">17.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op9" value="18">18</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op10" value="18.5">18.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc11" id="acc11_op11" value="19">19</input>
						</label></br></br>
			</div>
			<div data-toggle="buttons">
				<center>SLEEVE</center></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc12" id="acc12_op1" value="32/33">32/33</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc12" id="acc12_op2" value="34/35">34/35</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc12" id="acc12_op3" value="36/37">36/37</input>
						</label></br></br>		
			</div>
		</div>
		<button class="accordion" type="button">How do you wear your clothes?</button>
		<div class="panel text1" data-toggle="buttons">
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc13" id="acc1_op1" value="regular"><img src="img/regular.jpg"></input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc13" id="acc13_op2" value="fitted"><img src="img/fitted.jpg"></input>
						</label></br></br>
		</div>

		<button class="accordion" type="button">What is your Pant Size?</button>
		<div class="panel text1">
			<div data-toggle="buttons">
					<center>WAIST</center></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op1" value="29">29</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op2" value="30">30</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op3" value="31">31</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op4" value="32">32</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op5" value="33">33</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op6" value="34">34</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op7" value="35">35</input>
						</label></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span> 
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op8" value="36">36</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span> 
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op9" value="37">37</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op10" value="38">38</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op11" value="39">39</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op12" value="40">40</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op13" value="41">41</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc14" id="acc14_op14" value="42">42</input>
						</label></br></br>
			</div>
			<div data-toggle="buttons">
					<center>INSEAM</center></br>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc15" id="acc15_op1" value="29">29</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc15" id="acc15_op2" value="30">30</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc15" id="acc15_op3" value="32">32</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc15" id="acc15_op4" value="34">34</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc15" id="acc15_op5" value="36">36</input>
						</label></br></br>
					
			</div>
			<div data-toggle="buttons">
					<center>CUT</center>
					<h4>(You may select more than 1 option)</h4>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc16[]" id="acc16_op1" value="relaxed">Relaxed</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc16[]" id="acc16_op2" value="bootcut">Boot Cut</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc16[]" id="acc16_op3" value="straight">Straight</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc16[]" id="acc16_op4" value="slim">Slim</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="checkbox" class="btn hidden" autocomplete="off" name="acc16[]" id="acc16_op5" value="skinny">Skinny</input>
						</label></br></br>
			</div>
	</div>
		<button class="accordion" type="button">What is your Shoe Size?</button>
		<div class="panel text1" data-toggle="buttons">
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op1" value="6">6</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op2" value="6.5">6.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op3" value="7">7</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op4" value="7.5">7.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op5" value="8">8</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op6" value="8.5">8.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op7" value="9">9</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op8" value="9.5">9.5</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op9" value="10">10</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op10" value="11">11</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc17" id="acc17_op11" value="12">12</input>
						</label></br></br>
		
		</div>
		<button class="accordion" type="button">What is your Blazer Size?</button>
		<div class="panel text1">
					<!-- Not sure of your blazer size?
					<button id="myBtn">?</button>

				
					<div id="myModal" class="modal">

					 
					  <div class="modal-content">
					    <div class="modal-header">
					      <span class="close">x</span>
					      <h2>STYLEGENT BLAZER SIZES</h2>
					    </div>
					    <div class="modal-body">
					      <img src="img/blazersizes.jpg">
					    </div>
					  </div>

					</div> -->
						<script>
						
						var modal = document.getElementById('myModal');						
						var btn = document.getElementById("myBtn");						
						var span = document.getElementsByClassName("close")[0];
						btn.onclick = function() {
						    modal.style.display = "block";
						}						
						span.onclick = function() {
						    modal.style.display = "none";
						}
						window.onclick = function(event) {
						    if (event.target == modal) {
						        modal.style.display = "none";
						    }
						}
						</script>
					<div data-toggle="buttons">
						</br><center>CHEST SIZE</center>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op1" value="36">36</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op2" value="38">38</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op3" value="40">40</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op4" value="42">42</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op5" value="44">44</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op6" value="46">46</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op7" value="48">48</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op8" value="50">50</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op9" value="52">52</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc18" id="acc18_op10" value="54">54</input>
						</label>
					</div>

					<div data-toggle="buttons">
						<center></br>LENGTH</center>
					<br><label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc19" id="acc19_op1" value="short">Short</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc19" id="acc19_op2" value="regular">Regular</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc19" id="acc19_op3" value="tall">Tall</input>
						</label>
						<label class="btn">
						<span class="glyphicon glyphicon-ok"></span>
						<input type="radio" class="btn hidden" autocomplete="off" name="acc19" id="acc19_op4" value="extall">Ex.Tall</input>
						</label>
					</div>

		</div>

			</br><center>
            <button class="btn btn-primary hidden-print" type="submit"><b>Save And Submit</b></button>
	    </center>




<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function(){
				this.classList.toggle("active");
				this.nextElementSibling.classList.toggle("show");
				
		  }
		}


</script>
</form>
</div>


</body>
</html>
