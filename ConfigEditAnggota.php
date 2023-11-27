<?php
// koneksi database
include 'Koneksi.php';

// menangkap data yang di kirim dari form
$id_anggota = $_POST['ID_Anggota'];
$nama = $_POST['Nama'];
$nama_sekolah = $_POST['Nama_Sekolah'];
$no_telepon = $_POST['No_Telepon'];

// update data ke database
mysqli_query($koneksi, "UPDATE anggota SET Nama='$nama',Nama_Sekolah='$nama_sekolah',No_Telepon='$no_telepon'where ID_Anggota='$id_anggota'");

// mengalihkan halaman kembali ke index.php
header("location:AnggotaAdmin.php");

?>