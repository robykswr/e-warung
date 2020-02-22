<?php

	include "include/conn.php";

	

	function tambah($data)
	{
		global $query;
		$nama 		= htmlspecialchars($data['nama']);
		$username	= htmlspecialchars($data['username']);
		$password	= mysqli_escape_string($query,$data['password']);
		$re_password= mysqli_escape_string($query,$data['re_password']);
		$tgl_lahir	= htmlspecialchars($data['tgl_lahir']);
		$image 		= upload();
		if (!$image) {
			return false;
		}

		$result = mysqli_query($query,"SELECT username FROM user WHERE username = '$username'");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
				  alert('username sudah pernah di gunakan harap gunakan yang lain')
				  </script>";
				 return false;
		}

		if ($password !== $re_password) {
			echo "<script>
					alert('password tidak sesuai')
				</script>";
				return false;
		}

		$q = "INSERT INTO user VALUES ('$nama','$username','$password','$tgl_lahir','$image')";

		mysqli_query($query,$q);

		return mysqli_affected_rows($query);
	}

	function upload()
	{
		$nama_file 	= $_FILES['image']['name'];
		$ukuran_file= $_FILES['image']['size'];
		$error		= $_FILES['image']['error'];
		$tmp_file 	= $_FILES['image']['tmp_name'];

		if ($error === 6) {
			echo "<script>
					alert('pilih gambar')
				</script>";
				return false;
		}

		$ekstensiGambarVal = ['jpg','png','jpeg'];

		$ekstensiGambar    = explode('.', $nama_file);

		$ekstensiGambar    = strtolower(end($ekstensiGambar));
		if (!in_array($ekstensiGambar,$ekstensiGambarVal)) {
			echo "<script>
					alert('gambar tidak sesuai')
					</script>";
					return false;
		}

		if ($ukuran_file > 20000) {
			echo "<script>
					alert('ukuran gambar terlalu besar')
				</script>";
				return false;
		}

		move_uploaded_file($tmp_file, "image/".$nama_file);
		return $nama_file;
	}

	function query($id)
	{
	global $query;
	$return = array();
	$q = mysqli_query($query,"SELECT * FROM user WHERE id = '$id'");
	while ($row = mysqli_fetch_assoc($q)) {
	$return[] = $row;
	}
	return $return;
	}

	function update($data = array())
	{
		global $query; 
		$username	= htmlspecialchars($data['username']);
		$nama 		= htmlspecialchars($data['nama']);
		$password	= mysqli_escape_string($query,$data['password']);
		$re_password= mysqli_escape_string($query,$data['re_password']);
		$tgl_lahir	= htmlspecialchars($data['tgl_lahir']);
		$gambar 	= upload();
		if (!$gambar) {
			return false;
		}

		$q = "UPDATE user SET nama 	= '$nama',
								   no_tlp	= '$no_tlp'
								   WHERE id  = '$id'";

		mysqli_query($query,$q);

		return mysqli_affected_rows($query);	
	}

?>