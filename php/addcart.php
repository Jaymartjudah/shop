<?php
	session_start();
	if(isset($_SESSION['cart'])){

		$cart_array_id = array_column($_SESSION['cart'], 'item_id');

			$count = count($_SESSION['cart']);
			$cart_array = array (
				'item_id' => $_POST['item_id'],
				'item_name' => $_POST['item_name'],
				'item_img' => $_POST['item_img'],
				'item_price' => $_POST['item_price'],
				'item_qty' => $_POST['item_qty']
			);
		array_push($_SESSION['cart'], $cart_array);

		header('location:cartView.php');
	}
	else{
		$cart_array = array (
			'item_id' => $_POST['item_id'],
			'item_name' => $_POST['item_name'],
			'item_img' => $_POST['item_img'],
			'item_price' => $_POST['item_price'],
			'item_qty' => $_POST['item_qty']
		);

		$_SESSION["cart"][0] = $cart_array;
		
		header('location:cartView.php');
	}
?>