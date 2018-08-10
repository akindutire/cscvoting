<?php

	if ($me->remove_const($_GET['rm_const_id'])) {
		header("location:index.php?q=contestant");
	}else{
		echo "System Error! Please Try Again  Later";
	}
?>