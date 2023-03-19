<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../font/all.css">
	<link rel="stylesheet" type="text/css" href="addprod.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<!-- <div class="fake">
		
	</div> -->
	<div class="wrapper" >
		<div class="container" >
			<style type="text/css">
				.wrapper *{
					text-align: left;
				}
			</style>
			<form  method="post" enctype="multipart/form-data">
	
			<input type="text" name="product" placeholder="product">
		
			<textarea name="desc" placeholder="description"></textarea>
		
			<input type="text" name="price" placeholder="price">
		
			 <input type="text" name="category" placeholder="dress,coat,shirt,scarp,pants,shoe">
		
			<input type="file" name="file" enctype="multipart/form-data" >
		
			<input type="submit" name="save" value="save" id="btn" style="text-align: center;background-color: #0F1E25;color:white;font-size: 1.1rem;">
		
	</form>
	<?php
	require '../php/dbcon.php';
		if(isset($_POST['save'])){
			if((($_FILES["file"]["type"]=="image/jpg")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/png"))&&($_FILES["file"]["size"]<20000000)){
				if($_FILES["file"]["error"]>0){
					echo "RETURN CODE:" .$_FILES["file"]["error"]."<br/>";
					echo "Invalid file";
				}
				
				else{
					$filetmp=$_FILES["file"]["tmp_name"];
					$filename=$_FILES["file"]["name"];
					$filetype=$_FILES["file"]["type"];
					$filepath="../img/allprod/".$_FILES["file"]["name"];
					move_uploaded_file($_FILES["file"]["tmp_name"],$filepath);
					
					mysqli_query($con,"INSERT INTO `tblproduct`( `product`, `description`, `price`, `pic`, `category`) VALUES ('".$_POST['product']."', '".$_POST['desc']."','".$_POST['price']."','".$_FILES["file"]["name"]."','".$_POST['category']."')");
					header("location:admin.php");
				}
					
			}
			else {
				echo "invalid file";
			}
		}
	?>
	
		</div>
	</div>
</body>
</html>