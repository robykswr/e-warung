<?php

include 'proses_login.php';

?>
<!-- test comment -->
<!DOCTYPE html>
<html>
<head>
	<title>Login | E-Warung</title>
	<link rel="icon" type="image/png" href="assets/ikon/png/32/shop.png"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-image: url('assets/login_v16/images/bg-01.jpg');">
 
 
	<div class="kotak_login" >
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username .." required="required">
			<span></span>
		</div>
			
	 		
			<label>Password</label>
			 <input type="password" name="password" class="form-control" placeholder="Password .." required="required">
	 		<br />
			
			<input type="submit" name="login" class="tombol_login" value="LOGIN">
 
			
		</form>
		
	</div>
 
 
</body>
</html>
