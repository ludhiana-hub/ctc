<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<div class="admin">
		<h1>Administrator</h1>

	<div class ="wellcome">
		<p>Halo <b><?php echo $_SESSION['username']; ?></b>
	<div class ="logout">
		<a href="logout.php">LOGOUT</a></p>

	<div class="judul">		
		<h1>Rekap Clean The COVID-19</h1>
	<br>
	<br>
	<div class= "text">
	<a href="halaman_admin.php">Dashboard</a><a href="diagnosis.php">Rekap Diagnosis</a> <a href="pengguna.php">Rekap Pengguna</a>

	</div>
	</div>
	
	<br/>
<div class="copyright">
	<a>Powered By MKA Indonesia</a>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>