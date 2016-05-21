<?php 
	$con = new mysqli("localhost","root", "","web");
	if(!$con){
		die($con->error);
	}
?>