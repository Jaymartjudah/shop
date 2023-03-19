<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="../font/all.css">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<nav>
		<div class="nav">
			
		</div>
		<div class="nav2">	
			<li>
				<a href="addprod.php">ADD PRODUCT</a>
			</li>
			<li>
				<a href="transac.php">TRANSACTION</a>
			</li>
			<li>
				<a href="logout.php">LOGOUT</a>
			</li>	
		</div>	
	</nav>
	<div class="wrapper2">	
		<h2>PRODUCT</h2>
	</div>
	<div class="wrapper">
		<?php
			require '../php/dbcon.php';
		$res = mysqli_query($con,"SELECT * FROM tblproduct  ORDER BY category ASC");
			while($row = mysqli_fetch_array($res)){
				echo '<div class="grid-card">';
					echo '<div class="grid-img"  style="border-radius=0;">';
						echo '<img src="../img/allprod/'.$row['pic'].'" style="border-radius=0;">';
					echo '</div>';
					echo '<div class="grid-desc">';
						echo '<h3>'.$row['product'].'</h3>';
						echo '<textarea>'.$row['description'].'</textarea>';
						echo '<p>'.$row['category'].'</p>';
						echo '<h4>'.$row['price'].'</h4>';
						echo '<a href="edit.php?pid='.$row['id'].'"><input type="button" name="" value="EDIT" id="btn"></a><a href="delete.php?pid='.$row['id'].'"><input type="button" name="" value="DELETE" id="btn1"></a>';
					echo '</div>';
				echo '</div>';
			}
		?>
	</div>		
</body>
</html>