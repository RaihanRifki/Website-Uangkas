<?php
// koneksi database
include 'Koneksi.php';

// menangkap data yang di kirim dari form
$id_kas = $_POST['ID_Kas'];
$nama = $_POST['Nama'];
$jumlah_bayar = $_POST['Jumlah_Bayar'];
$tanggal_bayar = $_POST['Tanggal_Bayar'];

// update data ke database
mysqli_query($koneksi, "UPDATE uang_kas SET Nama='$nama',Jumlah_Bayar='$jumlah_bayar',Tanggal_Bayar='$tanggal_bayar'where ID_Kas='$id_kas'");

// mengalihkan halaman kembali ke index.php
header("location:UangkasAdmin.php");

?>