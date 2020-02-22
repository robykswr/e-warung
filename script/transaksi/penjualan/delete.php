<?php 
 	
	include "include/conn.php";

	$id = $_GET['id'];

	$q = mysqli_query($query,"DELETE FROM t_pembelian WHERE id ='$id'");

	if ($q) {
		echo "<script>alert('berahasil dihapus')
			 location.href = 'index.php?script=penjualan'
			</script>";
	}else{
		echo "<script>
			alert('gagal dihapus')
			location.href = 'index.php?script=penjualan'
			</script>";
	}

?>