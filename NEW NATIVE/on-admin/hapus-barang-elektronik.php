<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($con,"DELETE FROM barang_elektronik WHERE id_barang='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'barang-masuk-elektronik.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'barang-masuk-elektronik.php'</script>";	
}
?>