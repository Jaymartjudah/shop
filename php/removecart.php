<?php
	session_start();
	foreach($_SESSION['cart'] as $susi => $valyu){
		if($valyu['item_id'] == $_GET['id']){
			unset($_SESSION['cart'][$susi]);
			break 1;
			header('location:cartView.php');
		}
	}
?>