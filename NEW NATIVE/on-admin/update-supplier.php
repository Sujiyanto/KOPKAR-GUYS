<?php 
	include 'koneksi.php';
	$id_supplier	= $_POST['id_supplier'];
	$nama 			= $_POST['nama'];
	$no_telp		= $_POST['no_telp'];
	$alamat			= $_POST['alamat'];
 
	$act = mysqli_query($con, "UPDATE supplier SET nama_supplier='$nama', no_telp='$no_telp', alamat='$alamat'  WHERE id_supplier='$id_supplier'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Update Data\"); location.href = \"supplier.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>