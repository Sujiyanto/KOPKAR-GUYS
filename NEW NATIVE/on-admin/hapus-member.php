<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($con,"DELETE FROM member WHERE id_member='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'member.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'member.php'</script>";	
}
?>