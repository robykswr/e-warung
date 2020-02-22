<?php

	include "include/conn.php";

	

	function tambah($data)
	{
		global $query;
		$kd_toko	= htmlspecialchars($data['kd_toko']);
		$nm_toko 	= htmlspecialchars($data['nm_toko']);
		$alamat 	= htmlspecialchars($data['alamat']);
		$created_by	= $_SESSION['nama'];

		$q = "INSERT INTO m_toko (kd_toko,nm_toko,alamat,created_on,created_by) 
									VALUES ('$kd_toko','$nm_toko','$alamat',NOW(),'$created_by')";

		mysqli_query($query,$q);

		return mysqli_affected_rows($query);
	}

	function edit($id)
	{
	global $query;
	$return = array();
	$q = mysqli_query($query,"SELECT * FROM m_toko WHERE id = '$id'");
	while ($row = mysqli_fetch_assoc($q)) {
	$return[] = $row;
	}
	return $return;
	}

	function update($data = array())
	{
		global $query;
		$id  		= $data['id'];
		$kd_toko	= htmlspecialchars($data['kd_toko']);
		$nm_toko 	= htmlspecialchars($data['nm_toko']);
		$alamat 	= htmlspecialchars($data['alamat']);

		$q = "UPDATE m_toko SET kd_toko 	= '$kd_toko',
								nm_toko		= '$nm_toko',
								 alamat		= '$alamat'
								 WHERE id  	= '$id'";

		mysqli_query($query,$q);

		return mysqli_affected_rows($query);	
	}

?>