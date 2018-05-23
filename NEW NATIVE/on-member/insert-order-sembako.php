<?php 
	include 'koneksi.php';
	$nik 			= $_POST['nik'];
	$nama			= $_POST['nama_barang'];
	$harga			= $_POST['harga'];
	$uang_muka		= $_POST['uang_muka'];
	$jangka_waktu	= $_POST['jangka_waktu'];
	$angsuran		= $_POST['angsuran'];
	$total_harga	= $_POST['total_harga'];
	$tgl_keluar		= date("Y-m-d");
 
	$act = mysqli_query($con, "INSERT INTO penjualan SET nik='$nik', nama_barang='$nama', harga='$harga', uang_muka='$uang_muka', jangka_waktu='$jangka_waktu', angsuran='$angsuran', total_harga='$total_harga', tgl_keluar='$tgl_keluar'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Order Sembako\"); location.href = \"sembako.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>