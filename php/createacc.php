<?php

	require_once 'dbcon.php';

	if($_POST['password'] == $_POST['repass']){
		mysqli_query($con,"INSERT INTO `tbllogin`(`username`, `password`) VALUES ('".$_POST['username']."','".$_POST['password']."')");
		header('location:login.php');
	}
	else{
		header('location:signup.php?password%27not%27match');
	}

?>