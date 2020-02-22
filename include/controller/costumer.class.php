<?php

	include "include/conn.php";

	

	function tambah($data)
	{
		global $query;
		$kd_nama= htmlspecialchars($data['kd_nama']);
		$nama 	= htmlspecialchars($data['nama']);
		$no_tlp = htmlspecialchars($data['no_tlp']);

		$q = "INSERT INTO m_costumer (kd_nama,nama,no_tlp) VALUES ('$kd_nama','$nama','$no_tlp')";

		mysqli_query($query,$q);

		return mysqli_affected_rows($query);
	}

	function query($id)
	{
	global $query;
	$return = array();
	$q = mysqli_query($query,"SELECT * FROM m_costumer WHERE id = '$id'");
	while ($row = mysqli_fetch_assoc($q)) {
	$return[] = $row;
	}
	return $return;
	}

	function update($data = array())
	{
		global $query; 
		$id      = $data['id'];
		$nama    = $data['nama'];
		$no_tlp	 = $data['no_tlp'];

		$q = "UPDATE m_costumer SET nama 	= '$nama',
								   no_tlp	= '$no_tlp'
								   WHERE id  = '$id'";

		mysqli_query($query,$q);

		return mysqli_affected_rows($query);	
	}

?>