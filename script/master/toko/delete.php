<?php

include "include/conn.php";

$id = $_GET['id'];

$result = mysqli_query($query,"DELETE FROM m_toko WHERE id = '$id'");

if ($result) {
	echo "<script>
			alert('data berhasil dihapus')
			window.location.href = 'index.php?script=toko'
		</script>";
}else{
	echo "<script>
			alert('gagal di hapus')
			window.location.href = 'index.php?script=toko'
		</script>";
}

?>