<!DOCTYPE html>
<html>

<head>
   <title>Tambah Data</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <nav class="navbar navbar-expand-lg" style = "background-color: #00A9FF; color: #fff;">
      <div class="container-fluid">
         <nav class="navbar" style = "background-color: #00A9FF; color: #fff;">
            <div class="container-fluid">
               <a class="navbar-brand" href="#">
                  <img src="img/logowr.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                  Warint
               </a>
            </div>
         </nav>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="Index.php">Beranda</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="Anggota.php">Anggota</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Uangkas.php">Uangkas</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <h2 class="text-center mt-5"> Tambah Data Uang Kas</h2>
   <br />
   <div class="text-center">
      <a href="TambahUangKas.php"></a>
   </div>
   <br />
   <br />

   <form action="ConfigTambahKas.php" method="post" style="padding:0px 50px 0px 50px">
      <div class="mb-3">
         <label class="form-label">Nama Anggota :</label>
         <select class="form-select" name="Nama">
            <option selected>- PILIH NAMA - </option>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from anggota");
            while ($d = mysqli_fetch_array($data)) {
               ?>
               <option value="<?php echo $d['Nama']; ?>">
                  <?php echo $d['Nama']; ?>
               </option>
               <?php
            }
            ?>
      </div>
      </select>
      <div class="mt-4 mb-3">
         <label class="form-label">Pembayaran :</label>
         <select class="form-select" name="Jumlah_Bayar">
            <option selected>- PILIH JUMLAH BAYAR -</option>
            <option value="Rp 5.000 (1Minggu)">Rp 5.000 (1Minggu) </option>
            <option value="Rp 10.000 (2Minggu)">Rp 10.000 (2Minggu) </option>
            <option value="Rp 20.000 (1Bulan)">Rp 20.000 (1Bulan) </option>
         </select>
      </div>
      <div class="mt-4 mb-3">
         <label class="form-label">Tanggal Bayar :</label>
         <input type="date" class="form-control" name="Tanggal_Bayar">
      </div>
      <div class="text-center mt-5">
         <button class="btn btn-dark">TAMBAHKAN DATA</button>
      </div>
   </form>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>