<?php 
// koneksi database
include 'Koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['Nama'];
$sekolah = $_POST['Nama_Sekolah'];
$telepon = $_POST['No_Telepon'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nama','$sekolah','$telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:AnggotaAdmin.php");
 
?>