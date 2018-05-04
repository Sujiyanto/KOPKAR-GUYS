<?php 
	include 'koneksi.php';
	$nama_barang	= $_POST['nama_barang'];
	$supplier		= $_POST['supplier'];
	$harga	 		= $_POST['harga'];
	$uang_muka		= $_POST['uang_muka'];
	$satuan			= $_POST['satuan'];
	$stok			= $_POST['stok'];
	$keterangan		= $_POST['keterangan'];
	$tgl_masuk		= date("Y-m-d");
 
	$act = mysqli_query($conn, "INSERT INTO barang_elektronik SET nama_barang='$nama_barang', supplier='$supplier', harga='$harga', uang_muka='$uang_muka', satuan='$satuan', stok='$stok', keterangan='$keterangan', tgl_masuk='$tgl_masuk'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Input Data\"); location.href = \"barang-masuk-elektronik.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>