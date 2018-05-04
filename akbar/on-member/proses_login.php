<?php
include "koneksi.php";

$pass = $_POST['password'];
$login = mysqli_query($conn, "SELECT * FROM member WHERE username='$_POST[username]' AND password='$pass'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

if ($ketemu){
  session_start();
  
  $_SESSION['username']     = $r['username'];
  $_SESSION['password']     = $r['password'];

  header('location: index.php');
}
else{
  include "login.php";
}
?>