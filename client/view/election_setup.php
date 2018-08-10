<?php
	$link = $connect->iconnect();
	$task_id = $_SESSION['task_id'];
	$voter_session_id = $_SESSION['token'];

	$sql = mysqli_query($link,"SELECT duration FROM timer WHERE task_id='$task_id'");
	list($duration)=mysqli_fetch_row($sql);
	$_SESSION['duration'] = $duration;


	//Prepare Ballot

	$sql2 = mysqli_query($link,"SELECT id,post_id FROM contestant WHERE task_id='$task_id'");
	$df =mysqli_query($link,"SELECT * FROM eballot WHERE voter_id='$voter_session_id'");
	
	if (mysqli_num_rows($df) == 0) {
		
		$sql3 = mysqli_prepare($link,"INSERT INTO eballot(id, post_id, contestant_id, task_id, voter_id,vote,has_visited_area) VALUES (?,?,?,?,?,?,?)");
		while (list($contestant_id,$post_id) = mysqli_fetch_row($sql2)) {
			$e = '';
			mysqli_stmt_bind_param($sql3,'iiiiiii',$e,$post_id,$contestant_id,$task_id,$voter_session_id,$e,$e);
			mysqli_execute($sql3);
		}
		

		//Set Start Time
		$start_time = time();
		
		$seconds_duration = $duration * 60;
		
		$end_time = $start_time + $seconds_duration;

		$_SESSION['start_time'] = $start_time;
		$_SESSION['end_time'] = $end_time;

		//Load Election

		header("location:index.php?q=cpanel");

	}else{
		header("location:index.php?q=cpanel");
	}
	

	
?>