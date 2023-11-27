<!DOCTYPE html>
<html>

<head>
   <title>Tampilan Data</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <nav class="navbar navbar-expand-lg" style="background-color: #00A9FF; color: #fff;">
      <div class="container-fluid">
         <nav class="navbar" style="background-color: #00A9FF; color: #fff;">
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
                  <a class="nav-link" aria-current="page" href="IndexAdmin.php">Beranda</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="AnggotaAdmin.php">Anggota</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="UangkasAdmin.php">Uangkas</a>
               </li>
            </ul>
         </div>
         <ul class="navbar-nav">
         <li class="nav-item me-3">
            <a class=" btn btn-light" href="LoginIndex.php">Logout</a>
         </li>
      </ul>
      </div>
   </nav>

   <h2 class="text-center mt-5"> Daftar Anggota</h2>
   <br />
   <a href="TambahAnggota.php">+ TAMBAH DATA</a>
   <br />
   <br />
   <table class="table table-bordered">
      <tr>
         <th style="background-color: #3876BF; color: #fff;"> NO</th>
         <th style="background-color: #3876BF; color: #fff;">ID_Anggota</th>
         <th style="background-color: #3876BF; color: #fff;">Nama</th>
         <th style="background-color: #3876BF; color: #fff;">Nama_Sekolah</th>
         <th style="background-color: #3876BF; color: #fff;">No_Telepon</th>
         <th style="background-color: #3876BF; color: #fff;">Opsi</th>
      </tr>
      <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "select * from anggota");
      while ($d = mysqli_fetch_array($data)) {
         ?>
         <tr>
            <td>
               <?php echo $no++; ?>
            </td>
            <td>
               <?php echo $d['ID_Anggota']; ?>
            </td>
            <td>
               <?php echo $d['Nama']; ?>
            </td>
            <td>
               <?php echo $d['Nama_Sekolah']; ?>
            </td>
            <td>
               <?php echo $d['No_Telepon']; ?>
            </td>
            <td>
               <a href="EditAnggota.php?ID_Anggota=<?php echo $d['ID_Anggota']; ?>">EDIT</a>
               <a href="HapusAnggota.php?ID_Anggota=<?php echo $d['ID_Anggota']; ?>"
                  onclick="return confirm('Hapus Data?');">HAPUS</a>
            </td>
         </tr>
         <?php
      }
      ?>
   </table>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>