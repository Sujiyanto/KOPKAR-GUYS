<?php 
	include 'koneksi.php';
	$nik 			= $_POST['nik'];
	$nama 			= $_POST['nama'];
	$no_hp			= $_POST['no_hp'];
	$email 			= $_POST['email'];
	$alamat			= $_POST['alamat'];
	$username 		= $_POST['username'];
	$password		= $_POST['password'];
 
	$act = mysqli_query($con, "INSERT INTO member SET nik='$nik', nama_member='$nama', no_hp='$no_hp', email='$email', alamat='$alamat', username='$username', password='$password'");
 
 	if ($act) {
 		print "<script>alert(\"Sukses Input Data\"); location.href = \"member.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>