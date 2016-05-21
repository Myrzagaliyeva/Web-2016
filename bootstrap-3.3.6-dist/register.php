<?php 
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	include("connection.php");
	$query = "INSERT INTO users VALUES(NULL, '".$name."', '".$surname."', '".$email."', md5('".$pass."'), '1')";
	if(!$con->query($query)){
		echo $con->error;
	}
	header("location:sign.php")


?>.