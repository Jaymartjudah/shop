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
                <form method="post" action="addcart.php">
                    <div style="width: 80%;margin:auto;	padding: 20px;">
                        <?php
                            require_once 'dbcon.php';
                            $select = mysqli_query($con,"SELECT * FROM `tblproduct` where id=".$_GET['pid']."");
                            if($row = mysqli_fetch_array($select)){
                        ?>
                            <div style="display: grid;grid-template-columns: 1fr 1fr;grid-gap: 15px;">
                                <img src="../img/allprod/<?php echo $row['pic'];?>" style="height: 230px;display: block;margin: auto;">
                                <div style="display: grid;grid-gap: 10px;">
                                        <p>Product name : <?php echo $row['product'];?></p>
                                        <p>description : <?php echo $row['description'];?></p>
                                        <p>category : <?php echo $row['category']?></p>
                                        <p>price : <?php echo $row['price'];?></p>
                                        <span>Quantity <input type="number" name="item_qty" min="1" value="1"></span>
                                        <input type="submit" name="cart" value="ADD CART" style="padding: 15px;">
                                        <!-- HIDDEN -->
                                        <input type="hidden" name="item_id" value="<?php echo $row['id'];?>">
                                        <input type="hidden" name="item_name" value="<?php echo $row['product'];?>">
                                        <input type="hidden" name="item_img" value="<?php echo $row['pic'];?>">
                                        <input type="hidden" name="item_price" value="<?php echo $row['price'];?>">
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </form>
			</div>
		</div>	
	</section>
	
	<script src="script.js"></script>
</body>
</html>