<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../font/style.css">
</head>
<body>
		<div class="wrapper">	
			<div class="container">	
				<form method="post" action="createacc.php">
				<h3>CREATE ACCOUNT</h3>
				<br>
				<br>

				<p>
					<label>Username</label><br>
					<input type="text" name="username" placeholder="Enter username">
				</p>
				<p>
					<label>Password</label><br>
					<input type="password" name="password" placeholder="Enter password">

				</p>
				<p>
					<label>Re-type Password</label><br>
					<input type="password" name="repass" required autocomplete="off" placeholder="Re-type password">
				</p>
				
				<input type="submit" name="sub" value="SUBMIT" id="log">
			</form>	
			</div>		
		</div>	
</body>
</html>