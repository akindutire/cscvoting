<?php
	
	$link = $connect->iconnect();
	$task = $_SESSION['task_id'];
	if (isset($_GET['eis'])) {

		$tok = mysqli_real_escape_string($link,$check->sanitize($_GET['eis']));

		$sql = mysqli_query($link,"SELECT * FROM logger WHERE task_id='$task' AND token='$tok'");
		if (mysqli_num_rows($sql) != 1) {
			die('Incorrect Token Entered, go back');
		}
	
	}

?>
<head>
	
	<title>
		
		LIVE****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 

</head>


<body>
	
	<?php include_once('../images/layout/chead.php'); ?>

	<div class="w3-row">

	<div class="w3-container w3-animate-left">

		

		<div class="w3-col m12 w3-responsive w3-card-4 w3-animate-left" style="margin-top: 1%; margin-bottom: 5%; padding: 5px;">
		
		
		
			<?php
			
				$link = $connect->iconnect();

				$sql = mysqli_query($link,"SELECT name FROM task WHERE id='$task'");
				list($name) = mysqli_fetch_row($sql);

				echo "<P class='w3-round w3-padding-small w3-center w3-large' id='feedback'>$name General Result</P>";
					
				$record->election_result($task);			
			?>
		

			
		</div>



		</div>

		
	</div>
	</div>

	<?php include_once('../images/layout/cfooter.php'); ?>

</body>