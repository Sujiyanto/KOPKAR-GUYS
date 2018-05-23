<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($con,"DELETE FROM penjualan WHERE id_order='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'order-barang.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'order-barang.php'</script>";	
}
?>