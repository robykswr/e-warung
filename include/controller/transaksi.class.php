<?php

include "include/conn.php";


 function query($id)
 {
 	global $query;
 	$return = array();
 	$q = mysqli_query($query,"SELECT * FROM t_pembelian WHERE id = '$id'");
 	while ($data = mysqli_fetch_array($q)) {
 		$return[] = $data;
 	}
 	return $return;
 }

	function update($data)
	{
		global $query;
		$id 	   = $data['id'];
		$nm_barang = htmlspecialchars($data['nm_barang']);
		$kd_nama   = htmlspecialchars($data['kd_nama']);
		$tanggal   = htmlspecialchars($data['tanggal']);
		$qty	   = htmlspecialchars($data['qty']);
		$harga	   = htmlspecialchars($data['harga']);
		$keterangan= htmlspecialchars($data['keterangan']);

		$q = mysqli_query($query,"UPDATE t_pembelian SET nm_barang = '$nm_barang',
														  kd_nama  = '$kd_nama',
														  tanggal  = '$tanggal ',
														  qty 	   = '$qty',
														  harga	   = '$harga',
														  keterangan = '$keterangan',
														  jam 	   = NOW()
														  WHERE id = '$id'");
		mysqli_affected_rows($query);
		return true;
	}

 	function insert($data)
	{
 	global $query;

 		$nm_barang = htmlspecialchars($data['nm_barang']);
		$kd_nama   = htmlspecialchars($data['kd_nama']);
		$tanggal   = htmlspecialchars($data['tanggal']);
		$qty	   = htmlspecialchars($data['qty']);
		$harga	   = htmlspecialchars($data['harga']);
		$keterangan= htmlspecialchars($data['keterangan']);
		$created_by= $_SESSION['username'];

 	$q = mysqli_query($query,"INSERT INTO t_pembelian (nm_barang, kd_nama, tanggal, qty, harga, 
 														keterangan,jam,created_by) VALUES (
 														'$nm_barang',
 														'$kd_nama',
 														'$tanggal',
 														'$qty',
 														'$harga	',
 														'$keterangan',
 														 NOW(),
 														'$created_by')");
 	mysqli_affected_rows($query);
 	return true;
 }

 	function rupiah($angka){
	
	$hasil_rupiah =  number_format($angka,3,'.','.');
	return $hasil_rupiah;
 
}

