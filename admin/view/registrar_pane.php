
<?php $me->verifylogin("registrar",1); ?>
<head>
	
	<title>
		
		Csc Voting[REGISTRAR]

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>

<body>
	
	
			<?php include_once('../images/layout/head.php'); ?>

			<?php include_once('../images/layout/menu.php'); ?>
	
	
	<div class="w3-container" style="position: relative; margin: 0;">

	<div class="w3-row">
		
		<nav class="w3-sidenav w3-animate-left w3-col s3" style="position: relative; z-index: 0; padding-left: 7px; padding-right: 7px;">

			<ul>
				<li><a href="index.php?q=addinstitution">New Institution</li>
			</ul>	
			
		</nav>
		
		

		<div class="w3-border-left w3-col s9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
			<ul class="w3-ul w3-twothird w3-card-4">	
				<?php 
				
					//$me->load_contestant_preview();
				
				?>
			</ul>
				
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>