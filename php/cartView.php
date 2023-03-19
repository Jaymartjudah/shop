<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aesthetic</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://kit.fontawesome.com/6c543701ce.js" crossorigin="anonymous"></script>
	<script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/img.css">
</head>
<body>
	<!-- navigation -->
	<nav class="navbar">
		<div class="max-width">
			<div class="search"><a href="">search</a></div>	
			<div class="logo"><a href="index.php">Aesthetic</a></div>
			<div class="sidelogo"><a href="php/main.php">Account</a><a href="">Shopping</a></div>
		</div>
		<br>
		<hr class="line">
		<br>
		<ul class="menu">
			<li><a href="dress.php">Dress</a></li>
			<li><a href="coat.php">Coat</a></li>
			<li><a href="shirt.php">Shirt</a></li>
			<li><a href="scarp.php">Scarp</a></li>
			<li><a href="pants.php">Pants</a></li>
			<li><a href="shoes.php">Shoes</a></li>
		</ul>		
	</nav>
	<!-- end of navigation -->
	<!-- home section start -->
	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
                <style type="text/css">
		            tr,th,td{
			            padding: 10px;
		            }
		            table{
			            margin:auto;
		            }
	            </style>
	    <table border="1" cellpadding="5" cellspacing="5">
		    <tr>
			    <th colspan="2">Product Details</th>
			    <th>Price</th>
			    <th>-</th>
		    </tr>
		<?php
			$total = 0;
			if(isset($_SESSION['cart'])){
				if(!empty($_SESSION['cart'])){
				    foreach($_SESSION['cart'] as $keys => $values){
		            ?>
						<tr>
							<td><span style="
								width: 40px;
								height: 40px;
								border-radius: 50%;
								background: url(../img/allprod/<?php echo $values['item_img'];?>);
								background-size: cover;
								background-position: center;
								display: block;
								"></span></td>
							<td style="font-size: .9rem;">
								<?php if($values['item_qty'] != 1){echo '('.$values['item_qty'].'x)&nbsp;';}?>
								<?php echo $values['item_name'];?>
							</td>
							<td style="font-size: .8rem;">$<?php echo number_format(($values['item_price']*$values['item_qty']),2);?></td>
							<td>
								<a href="removecart.php?id=<?php echo $values['item_id'];?>">DELETE</a>
							</td>
						</tr>
					<?php
						$total = $total + ($values["item_price"] * $values["item_qty"]);
					}
					?>
					<tr>
						<th colspan="4">total : $<?php echo number_format($total,2);?></th>
					</tr>
					<?php
				    }
			        }
		            ?>
	            </table>
			</div>
		</div>	
	</section>
	<script src="script.js"></script>
</body>
</html>