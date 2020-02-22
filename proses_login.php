<?php

session_start();
require "include/conn.php";


	
if (isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
	
	$id 	= $_COOKIE['id'];
	$key 	= $_COOKIE['username'];

	//ambil data berdasarkan id
	$result = mysqli_query($con,"SELECT * FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['Login'] = true;
		$_SESSION['username'];
	}
}

if (isset($_SESSION['login'])) {
	header("location:index.php");
	exit;
}

	if (isset($_POST['login'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($query,"SELECT * FROM user WHERE username ='$username' ");

		//cek data yang ada di database apabila benar bernilai 1 apabila false nilainya 0
		if (mysqli_num_rows($result)==1) {
			
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row['password']) ) {
				$_SESSION['login'] = true;
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] 	  = $row['nama'];

				//membuat cookie
				if (isset($_POST['remember'])) {
				//set cookie
					setcookie('id',$row['id'], time()+60);
					setcookie('key',hash('sha256', $row['username']),time()+60);
				}

			header("location:index.php?script=home");
			}
		}else{
			echo "<script>
					alert('Username dan Password salah');
					window.location.href='login.php';
				</script> ";
		}

		

	}

	?>