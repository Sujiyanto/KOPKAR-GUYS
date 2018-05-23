<?php
if (isset($_POST['nik']) && $_POST['nik']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $nik = $_POST['nik'];
    $nama_member = $_POST['nama_member'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO member (nik, nama_member, no_hp, email, alamat, username, password) VALUES ('$nik', '$nama_member', '$no_hp', '$email', '$alamat', '$username', '$password')";
    $insert = $con->query($sql);
    // jika gagal
    if (! $insert) {
        echo "<script>alert('".$conn->error."'); window.location.href = './register.php';</script>";
    } else {
        echo "<script>alert('Registrasi Berhasil'); window.location.href = './login.php';</script>";
    }
}
?>