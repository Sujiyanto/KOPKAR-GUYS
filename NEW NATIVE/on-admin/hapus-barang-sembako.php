<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($con,"DELETE FROM barang_sembako WHERE id_barang='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'barang-masuk-sembako.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'barang-masuk-sembako.php'</script>";	
}
?>