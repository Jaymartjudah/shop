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
			<div class="logo"><a href="../index.php">Aesthetic</a></div>
			<div class="sidelogo"><a href="main.php">Account</a><a href="cartView.php">Shopping</a></div>
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
	
	<!-- about section -->

	<section class="about" id="shop">
		<div class="max-width">
			<div class="about-content">
                <div class="grid-item-con">
                    <div class="grid-item">
                        <?php
                            require_once 'dbcon.php';
                            $select = mysqli_query($con,"SELECT * FROM `tblproduct` where category = 'scarp'");
                            while($row = mysqli_fetch_array($select)){
                                echo '<div class="grid-card">';
                                    echo '<div class="grid-img">';
                                        echo '<img src="../img/allprod/'.$row['pic'].'">';
                                    echo '</div>';
                                    echo '<div class="grid-desc">';
                                        echo '<h3>'.$row['product'].'</h3>';
                                        echo '<p>'.$row['description'].'</p>';
                                        echo '<p>'.$row['category'].'</p>';
                                        echo '<h4>'.$row['price'].'</h4>';
                                    echo '</div>';
                                    echo '<h4><a href="itemView.php?pid='.$row['id'].'"><p>Learn more</p></a></h4>';
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