<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($con,"DELETE FROM supplier WHERE id_supplier='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'supplier.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'supplier.php'</script>";	
}
?>