<?php

	namespace cliqsFrameWork\update;
	
	include_once('../../bootstrap/pageinit.php');
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
	

	
		$up=$_POST['upid'];
		
		if($up==1){
			
			if (empty($_POST['vkey'])) {
		
				echo "Please Select A Contestant";
		
			}else{
		
				$contestant_id=$check->sanitize($_POST['vkey']);
				echo "Processing Vote";
				$me->vote_contestant($contestant_id);
	
			}
			
		}else if($up==2){
			
		}else if($up==3){

		}else if($up==4){

			
		}else if($up==5){

			
		}else if($up==6){
			
			
		}else if($up==7){

			
		}else if($up==8){

			
		}else if($up==9){
			
			
		}else if ($up == 10 ) {
			

		}else if ($up == 11) {

			
		}else if ($up == 12) {

		}elseif ($up == 15) {

			
		}else if ($up == 16) {

			
		}else if ($up == 17) {
			

		}else if ($up == 18) {
			

		}
	


?>