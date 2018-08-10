
<?php $me->verifylogin("registrar",1); ?>
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

	<div class="w3-row">
		
			<ul class="w3-ul w3-animate-left w3-col m3" style="position: relative; z-index: 0; padding-left: 7px; padding-right: 7px;">

			
				<div class="w3-round w3-margin-8 w3-card-2 w3-container">		
					<?php //$me->loadmenu(1); ?>
				</div>
			
			</ul>
		
		
		

		<div class="w3-col m9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
				<h1>Create An Instuitution Handle</h1>

				<P class='w3-card-2 w3-round w3-padding-small w3-small' id='feedback'></P>
				<form class="w3-form w3-half" method="post" action=<?php echo $config['control']['add']; ?> style="margin-left: 10%;">

					<input type="hidden" name="addid" value="8">

					

					<label class="w3-label w3-text-red">Institution Name</label><input class="w3-input" type="text" name="org_name" id="org_name" required="required" /><br>

					<label class="w3-label w3-text-red">Institution Mail</label><input class="w3-input" type="email" name="org_mat" id="org_mat" required="required" /><br>

					<label class="w3-label w3-text-red">Institution Passkey.</label><input class="w3-input" type="password" name="org_pass" id="org_pass" required="required" /><br>

					<!--<label class="w3-label">Sex</label><select class="w3-input" name="sex" id="sex">
						
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br>-->

					<hr>
					
					
					<button class="w3-btn w3-center w3-indigo w3-text-white" type="submit">Create</button>


				</form>
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>