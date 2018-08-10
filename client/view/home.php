<head>
	
	<title>
		
		CSC Voting****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 

</head>

<body>
	
	<?php include_once('../images/layout/chead.php'); ?>

	<div class="w3-row"  style="background: url(../images/content/home_bg.jpg);">

	<div class="w3-container">

		<p class="w3-center"><a href="live.php?q=electlive" class="w3-btn w3-border w3-round w3-padding-medium w3-small" style="background: transparent;">Follow Live Result</a></p>			


		<div class="w3-col m6 w3-responsive w3-white w3-card-4 w3-animate-left w3-hide-small w3-hide-medium" style="height: auto; margin-top: 1%; margin-bottom: 3%; padding: 0px; margin-left: 25%; margin-right: 25%;">
		
		
		
			<h2 class="w3-center w3-col m12 w3-indigo" style="width: 100%; margin: 0px;">login</h2><br>
		
	 		<!--<P class='w3-red w3-round w3-padding-small w3-center w3-small' id='feedback'></P>-->

			<form method="post" action=<?php echo $config['control']['splogin']; ?> style="padding:5%;" id="clientlogin" class="w3-form">

				<input type='hidden' name='loginid' value='2'>
				<br>

				<label class="w3 label w3-left">Voter ID.</label><input class="w3-input w3-round w3-border" placeholder='Voter ID' type="text" id="usr" name="iusr" required><br>

				<label class="w3 label w3-left">Secret No.</label><input class="w3-input w3-round w3-border" placeholder='Secret Pin' type="password" id="pwd" name='ipwd' required><br>				

				<p class="w3-center"><button id="btnloginvot" type="submit" class="w3-btn w3-indigo w3-center">Enter</button></p>

			</form>

			
		</div>


		<!--Medium Screen -->
		<div class="w3-col m6 w3-responsive w3-white w3-card-4 w3-animate-left w3-hide-small w3-hide-large" style="height: auto; margin-top: 5%; margin-bottom: 10%; padding: 0px; margin-left: 25%; margin-right: 25%;">
		
		
		
			<h2 class="w3-center w3-col m12 w3-indigo" style="width: 100%; margin: 0px;">login</h2><br>
		
	 		<!--<P class='w3-red w3-round w3-padding-small w3-center w3-small' id='feedback'></P>-->

			<form method="post" action=<?php echo $config['control']['splogin']; ?> style="padding:5%;" id="clientlogin" class="w3-form">

				<input type='hidden' name='loginid' value='2'>
				<br>

				<label class="w3 label w3-left">Voter ID.</label><input class="w3-input w3-round w3-border" type="text" id="usr" name="iusr" required><br>
				
				<label class="w3 label w3-left">Vote Secret No.</label><input class="w3-input w3-round w3-border" type="password" id="pwd" name='ipwd' required><br>				

				<p><button id="btnloginvot" type="submit" class="w3-btn w3-indigo w3-center">Enter</button></p>

			</form>

			
		</div>

		<!--Small Screen -->
		<div class="w3-col m12 w3-responsive w3-white w3-card-4 w3-animate-left w3-hide-medium w3-hide-large" style="height: auto; margin-top: 5%; margin-bottom: 10%; padding: 0px;">
		
		
		
			<h2 class="w3-center w3-col m12 w3-indigo" style="width: 100%; margin: 0px;">login</h2><br>
		
	 		<!--<P class='w3-red w3-round w3-padding-small w3-center w3-small' id='feedback'></P>-->

			<form method="post" action=<?php echo $config['control']['splogin']; ?> style="padding:5%;" id="clientlogin" class="w3-form">

				<input type='hidden' name='loginid' value='2'>
				<br><br>

				<input class="w3-input w3-round w3-border" placeholder="Voter ID E.G MATRIC No." type="text" id="usr" name="iusr" required><br>

				<input class="w3-input w3-round w3-border" placeholder="Voter Secret Pin" type="password" id="pwd" name='ipwd' required><br>				

				<p class="w3-center"><button id="btnloginvot" type="submit" class="w3-btn w3-indigo w3-center">Enter</button></p>

			</form>

			
		</div>


		</div>

		
	</div>
	</div>

	<?php include_once('../images/layout/cfooter.php'); ?>

</body>