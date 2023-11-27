<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$ID_Kas = $_GET['ID_Kas'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM uang_kas where ID_Kas='$ID_Kas'");
 
// mengalihkan halaman kembali ke index.php
header("location:UangkasAdmin.php");
 
?>