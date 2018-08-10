
<?php $me->verifylogin("admin",1); ?>
<head>
	
	<title>
		
		Csc Voting****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 
		 <script type="text/javascript" src="../resource/library/ckeditor_full_package/ckeditor.js"></script>


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
		

		<div class="w3-border-left w3-col m9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
				<h1>Contestant Registration</h1>
     
				
				<P class='w3-red w3-round w3-padding-small w3-small' id='feedback'></P>

				<form class="w3-form w3-full" method="post" action=<?php echo $config['control']['add']; ?> style="margin-left: 10%;">

					<input type="hidden" name="addid" value="4">

					<input type="hidden" name="assigned_file_size" value="1024" id="file_size">
					<label class="w3-label w3-text-red">Post</label><select class="w3-input" name="post" id="post">
						<?php

							$me->load_post_into_combo();

						?>
					 </select> <br>

					 <label>Appelation</label><input class="w3-input" type="text" name="con_name" id="con_name"><br>
					
					<label class="w3-label">Pic.</label><input class="w3-input" type="file" name="file" id="pfile"><br>

					<p class="w3-text-red">*Qualification Strictly for Contestant, Rating may be inform of Academic ranking or Student GPA</p>

					<input class="w3-radio" type="radio" name="qualification" value="4.5/5.0"> <label>4.5 - 5.0</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="4.0/4.5"> <label>4.0 - 4.5</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="3.5/4.0"> <label>3.5 - 4.0</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="3.0/3.5"> <label>3.0 - 3.5</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="2.5/3.0"> <label>2.5 - 3.0</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="2.0/2.5"> <label>2.0 - 2.5</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="1.5/2.0"> <label>1.5 - 2.0</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="1.0/1.5"> <label>1.0 - 1.5</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="0.5/1.0"> <label>0.5 - 1.0</label><br>

					<input class="w3-radio" type="radio" name="qualification" value="0.0/0.5"> <label>0.0 - 0.5</label><br><br>
					

					<label class="w3-label">Details</label><textarea name="context" id="context" class="ckeditor"></textarea><br>
					
					<script type="text/javascript">
					
						CKEDITOR.replace("context");
					
			 		</script>
					
					<p class="w3-center"><button class="w3-btn w3-center w3-indigo w3-text-white" type="submit" id="btnregcontestant">Register</button></p>

					<hr>
				</form><br>

				
		</div>
		<p class="w3-center"><a class="w3-btn w3-center w3-green w3-text-white" href="index.php?q=contestant_reg">Exit Registration</a>	</p>


	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>