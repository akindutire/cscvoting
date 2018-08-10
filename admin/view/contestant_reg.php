
<?php $me->verifylogin("admin",1); ?>
<head>
	
	<title>
		
		Csc Voting****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>

<body>
	
	
			<?php include_once('../images/layout/head.php'); ?>

			<?php include_once('../images/layout/menu.php'); ?>
	
	
	<div class="w3-container" style="position: relative; margin: 0;">

	<?php 
		$me->timer_set_check();
	?>
	
	<div class="w3-row">
		
			<ul class="w3-ul w3-animate-left w3-col m3" style="position: relative; z-index: 0; padding-left: 7px; padding-right: 7px;">

			
				<div class="w3-round w3-margin-8 w3-card-2 w3-container">		
					<?php $me->loadmenu(1); ?>
				</div>
			
			</ul>
		
		
		

		<div class="w3-col m9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
				<h1>Confirm Contestant</h1>

				<P class='w3-red w3-round w3-padding-small w3-small' id='feedback'></P>
				<form class="w3-form w3-half" method="post" action=<?php echo $config['control']['add']; ?> style="margin-left: 10%;">

					<input type="hidden" name="addid" value="0">

					

					<label class="w3-label w3-text-red">Contestant_ID</label><input class="w3-input" type="tel" name="phone" id="phone" required="required" autofocus="true" /><br>

					<!--<label class="w3-label">Sex</label><select class="w3-input" name="sex" id="sex">
						
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br>-->

					<hr>
					
					
					<button class="w3-btn w3-center w3-indigo w3-text-white" id="verify_contestant" type="submit">Enter</button>


				</form>
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>