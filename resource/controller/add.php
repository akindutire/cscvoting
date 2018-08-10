<?php
	
	namespace cliqsFrameWork\add;
	
	include_once('../../bootstrap/pageinit.php');
	//include_once('../../config/config.php');
	include_once('../class/users.php');
	
	use cliqsFrameWork\ic\yall as me;
	use cliqsFrameWork\ic\connect as connect;
	use cliqsFrameWork\ic\performance as ivalid;
	
	
	function redirect($url){

				$url=filter_var($url,FILTER_SANITIZE_URL);

				header("location:$url");
	}

	$me			=	new me();
	$connect	=	new connect();
	$check  	=	new ivalid();
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "from: Cyber Protection Corps Nigeria";

	
		$ad=(int)filter_var(strip_tags(trim($_POST['addid'])),FILTER_VALIDATE_INT);

		if($ad==1){

			//'fname':fname,'lname':lname,'tel':tel,'sex':sex,'adrank':adrank,'addid':1

			$phone=$check->sanitize($_POST['phone']);
			//$sex=$check->sanitize($_POST['sex']);
			
			$bk=0;
			$sex = 'null';
			$me->addvoter($phone,$sex);

		}else if($ad==2){

			$task = $check->sanitize($_POST['task']);
			$description = $check->sanitize($_POST['context']);
			
			$me->create_task($task,$description);

		}else if($ad==3){

			$post = $check->sanitize(ucwords($_POST['post']));
			$qualification = $check->sanitize($_POST['qualification']);
			
			$me->create_post($post,$qualification);

		}else if($ad==4){
			
			//'description':description,'privacy':privacy,'dpt':dpt
			
			$post = $check->sanitize($_POST['post']);
			$con_name = $check->sanitize($_POST['con_name']);
			$qualification = $check->sanitize($_POST['qualification']);
			$details = $check->sanitize($_POST['context']);
			
			if (empty($details)) {
				$details=$con_name;
			}
			
			$me->register_contestant($post,$con_name,$qualification,$details);
			
		}else if($ad==5){
			
			//'addid':5,'newsthread':newsthread,'pcomment':pcomment

				$name = $check->sanitize($_POST['admin_name']);
				$id = $check->sanitize($_POST['admin_id']);
				$sex = $check->sanitize($_POST['admin_sex']);
				$pass = $check->sanitize($_POST['admin_pass']);
				
				$me->add_regional_task_admin($name,$id,$sex,$pass);

		}else if ($ad==6) {
			
			//'addid':6,'state':state
				
				$file = $config['realdir']['upds']['remove']."/".$_SESSION['cliqs_hfuname'];

				$me->import_data_into_db($file,'voter');

		}else if ($ad==7) {

			//'addid':7,'state':state,'lga':lga

				$time=$check->sanitize($_POST['timer']);
				$me->set_task_voting_time($time);
			
		}else if ($ad==8) {

				$org_name = $check->sanitize($_POST['org_name']);
				$org_mat = $check->sanitize($_POST['org_mat']);
				$org_pass = $check->sanitize($_POST['org_pass']);

				$me->create_org_handle($org_name,$org_mat,$org_pass);
			
		}else if ($ad==9) {
			
			//'addid':9,'areaname':areaname,'state':state,'lga':lga,'addr':addr,'cont':contact,'type':type

			$option = $check->sanitize($_POST['election_privacy']);
			$me->set_privacy($option);

		}else if ($ad==10) {
			
		}else if ($ad==11) {	

		}else if ($ad==12) {

		}else if ($ad==13) {

		}else if ($ad==14) {
		
		}else if ($ad==15) {

		}else if ($ad==16) {
			
		}else if ($ad==17) {

		}else if ($ad==18) {

		}else if ($ad==19) {
			
		}else if ($ad==20) {
			
		}else if ($ad==21) {
			

		}else if ($ad==22) {
			

		}else if ($ad==23) {
			

		}else if ($ad==24) {
			

		}else if ($ad==25) {
			

		}


?>