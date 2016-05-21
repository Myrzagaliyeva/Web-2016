<?php 
	include('connection.php');
	$id=$_GET['id']; 
	$query = "DELETE FROM goods WHERE id='".$id."'";
	if ($result=$con->query($query)){
		header("Location:admin4.php");
	}else{
		echo $con->error;
	}
?>