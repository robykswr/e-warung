<?php

include "include/conn.php";

$id =$_GET['id'];

$result = mysqli_query($query,"DELETE FROM m_costumer WHERE id = $id");
if($result) {
	echo "<script>
	alert('berhasil dihapus')
	location.href = 'index.php?script=costumer'</script>";
	// echo "<script> alert('berhasil di hapus') 
	// window.location.href='index.php?script=costumer'</script>";
}else{
	echo "<script>alert('gagal dihapus') window.location.href=index.php?script=costumer'</script>";
}