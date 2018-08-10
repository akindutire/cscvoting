<?php
	
	namespace cliqsFrameWork\hupload;
	
	include_once('../../bootstrap/pageinit.php');
	include_once('../class/users.php');
	
	use cliqsFrameWork\ic\yall as me;
	use cliqsFrameWork\ic\connect as connectme;
	use cliqsFrameWork\ic\performance as ivalid;
	
	define("M", "http://".$_SERVER['HTTP_HOST']."/$project/images/content");

	$me			=	new me();
	$connect	=	new connectme();
	$check  	=	new ivalid();
	
	

	function redirect($url){

				$url=filter_var($url,FILTER_SANITIZE_URL);

				header("location:$url");
	}

	$name=str_replace(' ','',strtolower($_FILES['file']['name']));
	$name=str_replace('-', '', $name); $name=str_replace('_', '', $name);

	$type=$_FILES['file']['type'];
	$size=(int)($_FILES['file']['size']);
	$tmp=$_FILES['file']['tmp_name'];
	
	$assigned_size=(int)$_POST['assigned_file_size'];
	
		$arraytype=array('application/vnd.ms-excel');
		
		if(!empty($name)){	/*Check If file empty*/
			
			if(in_array($type,$arraytype)){		/*does file have demanded extension*/

				if($size<=($assigned_size * 1024) and !empty($size)){	/*Check if filesize is below assigned Limit *****thing*byte(1024), 1024byte==1kb*/


					#Append Upload timestamp to file to avoid data Collision
					$filename=md5(time().$config['init']['token']).$name;

					$y="Y";
					
					#Move file to web filesytem
					if(move_uploaded_file($tmp,"../../uploads/$y/removed"."/$filename")){
						
						#Assign A Session to File For Global Reasons
						$_SESSION['cliqs_hfuname']=$filename;

						
						#Create A Thumbnail;
						
						
						
						//Return A FLAG As Success in its Upload
						echo $config['flag']['sx'];



						}else{
							printf("<img src='%scancel.png' width='auto' height='13px'>System Error: Couldn't Complete File Submission",M);
							}
					
					
					}else{
						printf("<img src='%scancel.png' width='15px' height='15px'>&nbsp;File too large, upload below 1MB",M);
						}
			}else{
				printf("<img src='%scancel.png' width='15px' height='15px'>&nbsp;$type Unsupported File format, Suggest Using CSV file",M);
				}
		}else{
			printf("<img src='%scancel.png' width='15px' height='15px'>&nbsp;No File Selected",M);
			}
exit();	
?>