
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
	
	
	<div class="w3-container" style="position: relative;">
	<?php 
		$me->timer_set_check();
	?>
	<div class="w3-modal" id="modal1">
		
		<div class="w3-modal-content w3-animate-zoom">
		
		<a class="w3-right w3-red w3-btn" style="position: static;" onclick="document.getElementById('modal1').style.display='none'">X</a><br>
		<hr>

			<div class="w3-container" style="height:auto; max-height: 70%; overflow-y:auto;">
	
				<P class='w3-round w3-padding-small w3-small w3-card-2' id='feedback'></P>
				
				<form class="w3-form" action=<?php echo $config['control']['add']; ?> method="post" enctype="form-data/multipart">
					<input type="hidden" name="assigned_file_size" value="1024" id="file_size">
					<input type="hidden" name="addid" value="5">
					
					<label>Pic.</label><input type="file" class="w3-input" name="file" id="pfile"><br>

					<label>Id</label><input name="admin_id" id="admin_id" placeholder="e.g phoneno, email, or reg. no" type="text" class="w3-input"><br>

					<label>Password</label><input name="admin_pass" id="admin_pass" type="password" class="w3-input"><br>
					
					<label>Name</label><input name="admin_name" id="admin_name" type="text" class="w3-input"><br>
					
					<label>Sex</label><select class="w3-input" id="admin_sex" name="admin_sex">
						
						<option value="Male">Male</option>
						<option value="Female">Female</option>

					</select><br>

					<button type="submit" class="w3-btn w3-center-align">Submit</button>

				</form>

			</div>

		</div>

	</div>


	<div class="w3-row">
		
		<ul class="w3-animate-left w3-col m3 w3-ul" style="position: relative; z-index: 0; padding-left: 7px; padding-right: 7px;">

			<div class=" w3-round w3-card-2 w3-margin-8 w3-container">
				
				<?php $me->loadmenu(1); ?>
			
			</div>		
			
		</ul>
		
		

		<div class="w3-col m9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
			<ul class="w3-ul w3-full w3-card-2">	
				<?php 
				
					$me->load_admins();
					
					if ($me->haveexternalrights() == 1) {
										
									
				?>

					<li><a class="w3-btn w3-blue" onclick="document.getElementById('modal1').style.display='block'">Add Admin</a></li>

				<?php
					}
				?>

				
			</ul>
				
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>