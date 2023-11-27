<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['ID_Kas'];
$nama = $_POST['Nama'];
$bayar = $_POST['Jumlah_Bayar'];
$tanggal = $_POST['Tanggal_Bayar'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO uang_kas VALUES('$id','$nama','$bayar','$tanggal')");
 
// mengalihkan halaman kembali ke index.php
header("location:UangkasAdmin.php");
 
?>