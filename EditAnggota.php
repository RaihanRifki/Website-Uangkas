<!DOCTYPE html>
<html>

<head>
   <title>EDIT DATA</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <nav class="navbar navbar-expand-lg" style="background-color: #00A9FF; color: #fff;">
      <div class="container-fluid">
         <nav class="navbar" style="background-color: #00A9FF; color: #fff;">
            <div class="container-fluid">
               <a class="navbar-brand" href="#">
                  <img src="img/logowr.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
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


   
   <h3 class="text-center mt-5"> Edit Data Anggota</h3>
   <br>
   <br>

   <?php
   include "koneksi.php";
   $ID_Anggota = $_GET['ID_Anggota'];
   $data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE ID_Anggota='$ID_Anggota'");
   while ($d = mysqli_fetch_array($data)) {
      ?>
      <form action="ConfigEditAnggota.php" method="post">
         <table>
            <tr>
               <td>ID Anggota :</td>
               <td>
                  <input type="hidden" name="ID_Anggota" value="<?php echo $d['ID_Anggota'] ?>">
                  <input class="mb-2" type="text" name="ID_Anggota" value="<?php echo $d['ID_Anggota'] ?>">
               </td>
            </tr>
            <tr>
               <td>Nama :</td>
               <td><input class="mb-2" type="text" name="Nama" value="<?php echo $d['Nama'] ?>"></td>
            </tr>
            <tr>
               <td>Nama Sekolah :</td>
               <td><input class="mb-2" type="text" name="Nama_Sekolah" value="<?php echo $d['Nama_Sekolah'] ?>"></td>
            </tr>
            <tr>
               <td>No Telepon :</td>
               <td><input class="mb-2" type="text" name="No_Telepon" value="<?php echo $d['No_Telepon'] ?>"></td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <div class="mt-3">
                     <input style="padding: 00px 20px 00px 20px;" class="btn btn-primary" type="submit" value="Simpan"
                        onclick="confirm('Simpan Data?')">
                  </div>
               </td>
            </tr>
         </table>
      </form>
      <?php
   }
   ?>

</body>

</html>