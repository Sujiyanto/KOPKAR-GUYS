<?php 
	include 'koneksi.php';
	$nama			= $_POST['nama_member'];
	$jumlah_kredit	= $_POST['jumlah_kredit'];
	$jangka_waktu	= $_POST['jangka_waktu'];
	$angsuran		= $_POST['angsuran'];
	$total_kredit	= $_POST['total_kredit'];
	$tgl_kredit		= date("Y-m-d");
 
	$act = mysqli_query($con, "INSERT INTO kredit SET nama_member='$nama', jumlah_kredit='$jumlah_kredit', jangka_waktu='$jangka_waktu', angsuran='$angsuran', total_kredit='$total_kredit', tgl_kredit='$tgl_kredit'");
 
 	if ($act) {
 		print "<script>alert(\"Pengajuan Kredit Akan Diproses\"); location.href = \"pengajuan-kredit.php\"; </script>";
 	}
 	else {
 		echo "gagal";
 	}
?>