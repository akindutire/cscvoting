
<?php 

	$link = $connect->iconnect();
	$ersql = mysqli_query($link,"SELECT * FROM task");
	
?>

<head>
	
	<title>
		
		CSC Voting****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>

<body>
	
	<?php include_once('../images/layout/head.php'); ?>

	<?php include_once('../images/layout/menu.php'); ?>
		
	
	
<br>
<div class="w3-container">


	<div class="w3-row">
			
		<ul class="w3-animate-left w3-col m3 w3-ul" style="position: relative; z-index: 0; padding-left: 7px; padding-right: 7px;">

			<div class=" w3-round w3-card-2 w3-container">
			
				
				<?php 

					$ext_flag = $me->haveexternalrights();
					
					if ($ext_flag == 1 && $_SESSION['role'] == 'registrar') {
						
						echo "<li><a href='index.php?q=addinstitution'>New Institution</a></li>";
						//redirect("index.php?q=registrar_pane");
					}else if ($ext_flag == 1 && $_SESSION['role'] != 'registrar') {

						echo "<li><a href='index.php?q=create_task' target='_new'><i class='fa fa-plus'></i>&nbsp; Create Task</a></li>";
				

					}else{
						echo null;					
					}

					
				?>
							
			</div>

		</ul>

		<div class="w3-col m9 w3-responsive w3-padding-4" style="position: relative; z-index: 0; padding: 0px;">
			
			<div class="w3-container w3-card-4" style="padding: 0px; margin: 10%;">
				
				<h2 class="w3-full w3-center w3-indigo" style="width: 100%; margin: 0px;">Tasks / Institutions</h2><br>
				
				<?php

				if ($me->haveexternalrights() == 1 && $_SESSION['role'] == 'registrar') {

					
					$record->load_institution();
				}


					if ($_SESSION['role'] != 'registrar') {
						if (mysqli_num_rows($ersql) > 0) {
							
						
					
				?>
				<form method="post" action=<?php echo $config['control']['splogin']; ?> class="w3-form" style="padding:5%;">

					<input type="hidden" name="loginid" value="1">

					<label>Electoral Task</label>

					<select class="w3-input" name="task">
						
						<?php $me->load_select_task(); ?>

					</select>
					<br>
					<button class="w3-btn w3-indigo w3-center" type="submit" id="btnlogintask">Enter</button>
				</form>	

				<?php

					}else{
						echo "<p class='w3-center w3-padding-4 w3-text-red w3-large'>No Task Available</p>";
					}
				}
				?>

			</div><br>
		</div>

	</div>

</div>


	<?php include_once('../images/layout/footer.php'); ?>
</body>