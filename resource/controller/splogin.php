<?php
	
	namespace cliqsFrameWork\splogin;
	
	include_once('../../bootstrap/pageinit.php');
	//include_once('../../config/config.php');
	include_once('../class/users.php');
	
	use cliqsFrameWork\ic\yall as me;
	use cliqsFrameWork\ic\connect as connectme;
	use cliqsFrameWork\ic\performance as ivalid;
	
	function redirect($url){

				$url=filter_var($url,FILTER_SANITIZE_URL);

				header("location:$url");
	}


	$me			=	new me();
	$connect	=	new connectme();
	$check  	=	new ivalid();
	
	$loginid=(int)filter_var($_POST['loginid'],FILTER_VALIDATE_INT);
	
	//echo $_POST['loginid'];
		
	
		if($loginid == 1){
			
			$task = $check->sanitize($_POST['task']);
			
			$me->login_portal_acc_rank($task);
		
		}else if ($loginid == 2) {
		
			$iusr = $check->sanitize($_POST['iusr']);
			$ipwd = $check->sanitize($_POST['ipwd']);
			
			$me->login_voter_from_client_terminal($iusr,$ipwd);

		}else if ($loginid==3) {
			
			$task = $check->sanitize($_POST['task']);
			redirect("../../client/live.php?q=iresult&eis=$task");

		}else if ($loginid==4) {
			
			$task = $check->sanitize($_POST['task']);
			$tok = $check->sanitize($_POST['tok']);
			$_SESSION['task_id'] = $task;
			redirect("../../client/live.php?q=result&eis=$tok");

		}else if ($loginid==5) {
			# code...
		}else if ($loginid==6) {
			# code...
		}else if ($loginid==7) {
			# code...
		}else if ($loginid==8) {
			# code...
		}else if ($loginid==9) {
			# code...
		}else if ($loginid==10) {
			# code...
		}else if ($loginid==11) {
			# code...
		}else if ($loginid==12) {
			# code...
		}

	exit();
?>