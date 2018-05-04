<?php 
	include 'koneksi.php';	
	// $id_barang		= $_POST['id_barang'];
	$nama_supplier	= $_POST['nama_supplier'];
	$no_telp		= $_POST['no_telp'];
	$alamat 		= $_POST['alamat'];
	 
	$act = mysqli_query($conn, "INSERT INTO supplier SET nama_supplier='$nama_supplier', no_telp='$no_telp', alamat='$alamat'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Input Data\"); location.href = \"supplier.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>