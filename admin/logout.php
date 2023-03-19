<?php

	session_start();

	unset($_SESSION['logged']);
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_type']);

	header('location:../index.php');	

?>