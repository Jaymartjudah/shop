<?php 
	require_once '../php/dbcon.php';
	if (isset($_GET['pid'])) {
		$res = mysqli_query($con,"DELETE FROM `tblproduct` WHERE id=".$_GET['pid']. "");
		header("location:admin.php");
	}
	else{
		header("location:admin.php");
	}
 ?>