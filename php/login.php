<?php
	require_once 'dbcon.php';
	session_start();

	$res = mysqli_query($con,"SELECT * FROM `tbllogin` WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");

	if($row=mysqli_fetch_array($res)){

		$_SESSION['userId'] = $row['id'];
		$_SESSION['user'] = $row['username'];
		$_SESSION['type'] = $row['type'];

		if($_SESSION['type'] == null){
			$_SESSION['loggedIn'] = true;
			header("location:../index.php?id='".$_SESSION['user']."'");
		}
		else{
			$_SESSION['adminLog'] = true;
			header('location:../admin/admin.php');
		}
		
	}
	else{
		$_SESSION['loggedIn'] = false;
		header('location:main.php?Invalid=Account');
	}
?>