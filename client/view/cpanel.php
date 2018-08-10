
<?php  
						if (!empty($_SESSION['token'])) {

							$me->verify_voter_login($_SESSION['token']);
	
						}else{
							header("location:index.php");
						}
						
						$task_id = $_SESSION['task_id'];
						$link = $connect->iconnect();

						if (isset($_GET['opgh'])) {
					
							$post_id = mysqli_real_escape_string($link,$check->sanitize($_GET['opgh']));
					
						}else{
							
							$sql = mysqli_query($link,"SELECT post_id FROM contestant WHERE task_id='$task_id'");
							list($post_id) = mysqli_fetch_row($sql);
						
						}
?>

<head>
	
	<title>
		
		Csc Voting****

	</title>

		 <meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>

<body>
	
	
			<?php include_once('../images/layout/chead.php'); ?>

			<?php $me->posts_pane($_SESSION['task_id']); ?>
			
	
	<div class="w3-container" style="position: relative; margin: 0;">


	<div class="w3-row">
		
		<?php
			
			$remaining = (int)$_SESSION['end_time'] - (int)time();
		
			echo "<input type='hidden' value='$remaining' id='hiddentimeleft'>";

		?>
		

	<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
	
	<script>
		$(function(){
		
			$('#timer').ready(function(event){
					
					
				var left=$('#hiddentimeleft').val();

					var hour=parseInt(left/3600),
						minute=parseInt(left/60);
						
						var sec=parseInt((left)%60);
			
						if(minute>59){
							minute-=60;					
						}

					$('li#timer a').html(hour+' : '+minute+' : '+sec);			
					
					var timer=function(){
						
						left--;	
						
						var hour=parseInt(left/3600),
						minute=parseInt(left/60);
						
						var sec=parseInt((left)%60);
			
						if(minute>59){
							minute-=60;					
						}
						
						
						if((left) < 30 ){
							var x=$('li#timer');
							x.className += " w3-red";
						}
						
						if(parseInt(left) == 0){
							clearInterval(interval);
							window.location='index.php?q=finishvote';
						}
						
						$('li#timer a').html(hour+' : '+minute+' : '+sec);
							//timer();
							//console.log(used);
					}
				
			if(parseInt(left) > 0){	
				timer;
				var interval=setInterval(timer,1000);
			}else{
				console.log(left);
				}

			});
		});	
	</script>

<!--end timer -->

		<ul class="w3-ul w3-animate-left w3-col m2" style="position: relative; z-index: 0;">

			
			<div class="w3-round w3-margin-8 w3-padding-0 w3-card-2 w3-container">					
	
					<?php
						
						$token = $_SESSION['token'];
						$dfsa = mysqli_query($link,"SELECT phone FROM logger WHERE token='$token'");
						list($vid) = mysqli_fetch_row($dfsa);

					?>
					<li class="w3-large w3-text-red" id="timer"><a></a></li>

					
					<?php $me->get_cur_post($post_id); ?>
					
					<li class='w3-round' style='width:100% !important; margin:0 !important;'>ID: <?php echo $vid;?></li>					
					<?php $me->if_voted($task_id); ?>
			
			</div>		
			
		</ul>
		
		

		<div class="w3-col m10 w3-responsive w3-padding-4" style="position: relative; z-index: 0; margin:auto; padding: 15px;">
			
		
		<div class="w3-modal" id="modal1">

					<div class="w3-modal-content w3-animate-right">
						
						<a class="w3-btn w3-right w3-red" onclick="document.getElementById('modal1').style.display='none'">X</a>

						<div class="w3-container">
						
							<p></p>	
							
						
						</div>

					</div>
						
		</div>


		<!--End of Modal -->		
				<?php 
					if (isset($_GET['ios'])) {
						
						if (mysqli_real_escape_string($link,$check->sanitize($_GET['ios'])) == 1) {
							echo "<div class='w3-container w3-col m10 w3-card-2' style='margin:1%; text-align:center;'>
								<p style='font-size:50px;'><i class='fa fa-check w3-text-green'></i></p>
								<p>Voting Complete</p>
								</div>";		
						
						}
					}else{

						$me->load_all_contestant_according_to_task($task_id,$post_id);
						
					}
					
					//$me->vote_finish_enables();

				?>
				
		</div>

	</div>	

	</div>

	<?php include_once('../images/layout/footer.php'); ?>
</body>