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
                  <a class="nav-link" aria-current="page" href="IndexAdmin.php">Beranda</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="AnggotaAdmin.php">Anggota</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="UangkasAdmin.php">Uangkas</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <h2 class="text-center mt-5"> Tambah Data Anggota</h2>
   <br />
   <div class="text-center">
      <a href="TambahAnggota.php"></a>
   </div>
   <br />
   <br />

   <form action="ConfigTambahAnggota.php" method="post" style="padding:0px 50px 0px 50px">
      <div class="mb-3">
         <label class="form-label">Nama :</label><br>
       <input type="text" name="Nama">
      </div>
      <div class="mb-3">
         <label class="form-label">Nama_Sekolah :</label><br>
       <input type="text" name="Nama_Sekolah">
      </div>
      <div class="mb-3">
         <label class="form-label">No_Telepon :</label><br>
       <input type="text" name="No_Telepon">
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