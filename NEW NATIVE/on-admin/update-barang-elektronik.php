<?php 
	include 'koneksi.php';
	$id 			= $_POST['id_barang'];
	$nama 			= $_POST['nama_barang'];
	$supplier		= $_POST['supplier'];
	$harga			= $_POST['harga'];
	$uang_muka		= $_POST['uang_muka'];
	$stok			= $_POST['stok'];
	$satuan			= $_POST['satuan'];
	$keterangan		= $_POST['keterangan'];
 
	$act = mysqli_query($con, "UPDATE barang_elektronik SET nama_barang='$nama', supplier='$supplier', harga='$harga', uang_muka='$uang_muka', stok='$stok', satuan='$satuan', keterangan='$keterangan'  WHERE id_barang='$id'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Update Data\"); location.href = \"barang-masuk-elektronik.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>