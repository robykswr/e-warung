<?php 

include "include/conn.php";

function getData($id)
{
	global $query;
	$return = array();
	$q = mysqli_query($query,"SELECT * FROM t_penjualan WHERE id = '$id'");
	while ($data = mysqli_fetch_Array($q)) {
		$return[] = $data;
	}
	return $return;
}

function tambah($data)
{
	global $query;
	$nm_barang = htmlspecialchars($data['nm_barang']);
	$kd_nama   = htmlspecialchars($data['kd_nama']);
	$nm_toko   = htmlspecialchars($data['nm_toko']);
	$tanggal   = htmlspecialchars($data['tanggal']);
	$qty	   = htmlspecialchars($data['qty']);
	$harga 	   = htmlspecialchars($data['harga']);
	$keterangan= htmlspecialchars($data['keterangan']);
	$jam	   = htmlspecialchars($data['jam']);
	$created_by= $_SESSION['username'];


	$q = mysqli_query($query,"INSERT INTO t_penjualan (nm_barang,kd_nama,nm_toko,tanggal,qty,harga,
														keterangan) VALUES(
														'$nm_barang','$kd_nama','$nm_toko','$tanggal','$qty','$harga','$keterangan',NOW()");
}



