<head>
	
	<title>
		
		LIVE****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 

</head>

<body>
	
	<?php include_once('../images/layout/chead.php'); ?>

	<div class="w3-row"  style="background: url(../images/content/home_bg.jpg);">

	<div class="w3-container w3-animate-left" style="background: rgba(0, 0, 0, 0.29);">

		

		<div class="w3-col m12 w3-responsive w3-card-4 w3-animate-left" style="height: 60%; margin-top: 5%; margin-bottom: 5%; padding: 0px;">
		
		
		
		<!--<P class='w3-red w3-round w3-padding-small w3-center w3-small' id='feedback'></P>-->

			<form method="post" action=<?php echo $config['control']['splogin']; ?> style="padding:5%; margin-top: 5%; margin-bottom: 5%;" id="clientlogin" class="w3-form">

				<input type='hidden' name='loginid' value='3'>
				<br>

				<label class="w3 label w3-left w3-text-white">Select Election</label><select class="w3-input" name="task" id="etasks">
					
					<?php
						$link = $connect->iconnect();
						$sql = mysqli_query($link,"SELECT t.id,t.name FROM task AS t,privacy AS p WHERE p.task_id=t.id AND (p.privacy=0 OR p.privacy=2)");
						while (list($id,$task) = mysqli_fetch_row($sql)) {
							echo "<option value='$id'>$task</option>";
						}

					?>
				</select>

				<br>

				
				<p class="w3-center"><button id="btnloginvot" type="submit" class="w3-btn w3-indigo w3-center w3-round w3-white">Follow</button></p>

			</form>

			
		</div>



		</div>

		
	</div>
	</div>

	<?php include_once('../images/layout/cfooter.php'); ?>

</body>