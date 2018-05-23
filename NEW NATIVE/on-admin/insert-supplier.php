<?php 
	include 'koneksi.php';
	$nama 			= $_POST['nama'];
	$no_telp		= $_POST['no_telp'];
	$alamat			= $_POST['alamat'];
 
	$act = mysqli_query($con, "INSERT INTO supplier SET nama_supplier='$nama', no_telp='$no_telp', alamat='$alamat'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Input Data\"); location.href = \"supplier.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>