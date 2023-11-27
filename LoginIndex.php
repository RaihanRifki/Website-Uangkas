<!DOCTYPE html>
<html>

<head>
	<title>Tampilan Data</title>
	<link rel="stylesheet" href="style.css">
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
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="Index.php">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Anggota.php">Anggota</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Uangkas.php">Uangkas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="LoginIndex.php">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<body>


		<!-- cek pesan notifikasi -->
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "Login gagal! username dan password salah!";
			} else if ($_GET['pesan'] == "logout") {
				echo "Anda telah berhasil logout";
			} else if ($_GET['pesan'] == "belum_login") {
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>
		<br />
		
			<div class="kotak_login">
				<p class="tulisan_login">Silahkan login</p>

            <form method="post" action="LoginConfig.php">
				<form>
					<label>Username</label>
					<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

					<label>Password</label>
					<input type="text" name="password" class="form_login" placeholder="Password ..">

					<input type="submit" class="tombol_login" value="LOGIN">

					<br />
					<br />
					<center>
						<a class="link" href="Index.php">Kembali</a>
					</center>
				</form>
				<form>

			</div>

		
	</body>

</html>