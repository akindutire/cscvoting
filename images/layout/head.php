<?php
if ($me->haveexternalrights() == 1) {
	echo "<p class='w3-right'><img class='w3-padding-small' height='35px; width='auto' src='../images/content/super.gif'/><span class='w3-green w3-padding-large w3-small'>Super User Granted</span></p>";	
}else {
	echo "<p class='w3-right'><span class='w3-blue w3-margin-small w3-padding-large w3-medium'>Admin User</span></p>";
}

?>

<header class="w3-container w3-white w3-hide-small w3-hide-medium">
		
		<h2 class="w3-left"><img src="../images/content/logo.png" height="10%"> <span class="w3-text-blue"><a href="index.php">E-voting</a></h2>

		<h4 class="w3-right w3-small" style="margin-right: 10px;"><?php $me->working_profile();  ?></h4>

</header>

<header class="w3-container w3-white w3-hide-large w3-hide-small">
		
		<h3 class="w3-left w3-medium"><img src="../images/content/logo.png" height="5%" width="auto"> <span class="w3-text-blue"><a href="index.php">E-voting</a></h3>

		<h4 class="w3-right w3-small" style="margin-right: 10px;"><?php $me->working_profile();  ?></h4>

</header>

<header class="w3-container w3-white w3-hide-large w3-hide-medium">
		
		<h3 class="w3-left"><img src="../images/content/logo.png" height="5%"> <span class="w3-text-blue"><a href="index.php">E-voting</a></h3>

		<h4 class="w3-right w3-small" style="margin-right: 10px;"><?php $me->working_profile();  ?></h4>

</header>
<style type="text/css">
	a{
		text-decoration: none;
	}
</style>