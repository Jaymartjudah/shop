<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aesthetic</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/6c543701ce.js" crossorigin="anonymous"></script>
	<script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/img.css">
</head>
<body>
	<!-- navigation -->
	<nav class="navbar">
		<div class="max-width">
			<div class="search"><a href="">search</a></div>	
			<div class="logo"><a href="index.php">Aesthetic</a></div>
			<div class="sidelogo"><a href="php/main.php">Account</a><a href="php/cartView.php">Shopping</a></div>
		</div>
		<br>
		<hr class="line">
		<br>
		<ul class="menu">
			<li><a href="php/dress.php">Dress</a></li>
			<li><a href="php/coat.php">Coat</a></li>
			<li><a href="php/shirt.php">Shirt</a></li>
			<li><a href="php/scarp.php">Scarp</a></li>
			<li><a href="php/pants.php">Pants</a></li>
			<li><a href="php/shoes.php">Shoes</a></li>
		</ul>		
	</nav>
	<!-- end of navigation -->
	<!-- home section start -->
	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<br>
                <div class="text-2">Collections</div>
				<div class="text-1">you can explore and shop many differnt  collection <br> from various barands here</div>
				<a href="#shop"><i class="fa-sharp fa-regular fa-magnifying-glass"></i>Shop Now</a>
				<br>
                <div class="frame">
                    <img src="img/p3.png" alt="" class="brgimg">
                </div>
			</div>
		</div>	
	</section>
	
	<!-- about section -->

	<section class="about" id="shop">
		<div class="max-width">
			<h2 class="title">New Product</h2>
			<div class="about-content">
			<div class="grid-item-con">
                    <div class="grid-item">
                        <?php
                            require_once 'php/dbcon.php';
                            $select = mysqli_query($con,"SELECT * FROM `tblproduct` ORDER BY category ASC ");
                            while($row = mysqli_fetch_array($select)){
                                echo '<div class="grid-card">';
                                    echo '<div class="grid-img">';
                                        echo '<img src="img/allprod/'.$row['pic'].'">';
                                    echo '</div>';
                                    echo '<div class="grid-desc">';
                                        echo '<h3>'.$row['product'].'</h3>';
                                        echo '<p>'.$row['description'].'</p>';
                                        echo '<p>'.$row['category'].'</p>';
                                        echo '<h4>'.$row['price'].'</h4>';
                                    echo '</div>';
                                    echo '<h4><a href="php/itemView.php?pid='.$row['id'].'"><p>Learn more</p></a></h4>';
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>			
			</div>
		</div>	
	</section>

	<script src="script.js"></script>
</body>
</html>