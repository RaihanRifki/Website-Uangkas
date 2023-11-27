<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$ID_Anggota = $_GET['ID_Anggota'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM anggota where ID_Anggota='$ID_Anggota'");
 
// mengalihkan halaman kembali ke index.php
header("location:AnggotaAdmin.php");
 
?>