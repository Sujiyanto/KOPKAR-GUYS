<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($con,"DELETE FROM kredit WHERE id_kredit='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'kredit-uang.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'kredit-uang.php'</script>";	
}
?>