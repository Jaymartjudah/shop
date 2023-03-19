<?php 
	require_once '../php/dbcon.php';
	$res = mysqli_query($con,"SELECT * FROM `tblproduct` WHERE id=".$_GET['pid']."");
	if ($row=mysqli_fetch_array($res)) {
		$product=$row['product'];
		$desc = $row['description'];
		$price = $row['price'];
		$img = $row['pic'];
		$category= $row['category'];
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../font/all.css">
	<link rel="stylesheet" type="text/css" href="addprod.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<nav>
		<div class="nav">
			
		</div>
		<div class="nav2">
			<li>
			<a href="admin.php">Back</a>
		</li>
		<li>
			<a href="logout.php">LOGOUT</a>
		</li>
		</div>
	</nav>
	<div class="wrapper">
		<div class="container" style="width: 100%;">
			<form method="post" >
		<input type="text" name="product" value="<?php echo $product; ?>" >
		<textarea name="description"  ><?php echo $desc; ?> </textarea>
		<input type="text" name="price" value="<?php echo $price; ?>">
		<input type="text" name="category" value="<?php echo $category; ?>">
		<input type="submit" name="sub" value="SAVE" id="btn">
	<?php 
	require_once '../php/dbcon.php';
		if (isset($_POST['sub'])) {
			// UPDATE `tblproduct` SET `product`=[value-2],`description`=[value-3],`price`=[value-4],`category`=[value-5],`pic`=[value-6] WHERE 1
			mysqli_query($con,"UPDATE `tblproduct` SET `product`='".$_POST['product']."',`description`='".$_POST['description']."',`price`=".$_POST['price'].",`category`='".$_POST['category']."' WHERE id=".$_GET['pid']. "");
			header("location:admin.php");

			// echo $_POST['product'].'<br>';
			// echo $_POST['description'].'<br>';
			// echo $_POST['price'].'<br>';
			// echo $_POST['category'].'<br>';
			// echo $_GET['pid'].'<br>';
		}
	?>
	</form>
		</div>
	</div>
</body>
</html>