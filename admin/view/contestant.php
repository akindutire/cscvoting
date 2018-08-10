
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
		
		
		

		<div class="w3-border-left w3-col m9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 15px;">
			
				<h1>Contestant List</h1>

				<?php 

					$me->cur_election();

					$me->contestant_list();

				?>
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>