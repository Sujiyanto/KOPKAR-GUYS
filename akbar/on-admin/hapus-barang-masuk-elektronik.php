<?php 
include 'koneksi.php';
$id_barang = $_GET['id_barang'];
mysqli_query("DELETE FROM user WHERE id_barang='$id_barang'")or die(mysqli_error());
 
header("location:barang-masuk-elektronik.php?pesan=hapus");
?>