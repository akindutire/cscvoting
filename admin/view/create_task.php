
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

	<div class="w3-row">
		
		<nav class="w3-sidenav w3-animate-left w3-col s1" style="position: relative; z-index: 0; padding-left: 7px; padding-right: 7px;">

			
				
				 
					
			
		</nav>
		
		

		<div class="w3-border-left w3-col s11 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
				<h1>Create Task</h1>

				<form class="w3-form w3-full" method="post" action=<?php echo $config['control']['add']; ?> style="margin-left: 5%;">

					<input type="hidden" name="addid" value="2">

					<label class="w3-label w3-text-red">*Task</label><input class="w3-input" type="text" name="task" id="task" required="required" /><br>

					
					<label class="w3-label w3-text-red">*Description</label><br><br>
					<textarea name="context" id="context" class="ckeditor">
                	

               		</textarea>

                	<script type="text/javascript">
					
						CKEDITOR.replace("context");
					
			 		</script>
         		

					<br>
					
					<button class="w3-btn w3-center w3-indigo w3-text-white" type="submit">Create</button>


				</form>
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>