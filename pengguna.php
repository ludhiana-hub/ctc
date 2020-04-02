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
	<div class ="kembali">
		<a href="./halaman_admin.php">KEMBALI</a></p>

	<div class="judul">		
		<h1>Rekap Clean The COVID-19</h1>
	<br>
	<br>

    
	</div>
	</div>
	
	<br/>
<div class="copyright">
	<a>Powered By MKA Indonesia</a>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
        <?php
        include "koneksii.php"
        $no = 1;
		$data = mysqli_query($koneksi,"select * from user_diagnosis");
		while($d = mysqli_fetch_array($data)){
		?>
  <form action="table" method="post">
    <table border="1" cellpadding="1" cellspacing="0">
			<tr>
				<td>NO</td>
				<td>TIMESTAMP</td>
				<td>USERNAME TELEGRAM</td>
                <td>NAMA_TELEGRAM</td>
                <td>AIMS</td>
                <td>GENDER</td>
                <td>USIA</td>
                <td>CABANG</td>
                <td>DIAGNOSIS</td>
                <td>ACTION</td>
			</tr>
            <?php if(mysqli_num_rows($query)>0){ ?>
            <?php
                $no = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
		<tr>
			<td><?php echo &dno++; ?></td>
            <td><?php echo &data["username_telegram"].</td>
            <td><?php echo &data["nama_telegram"].</td>
            <td><?php echo &data["aims"].</td>
            <td><?php echo &data["gender"].</td>
            <td><?php echo &data["usia"].</td>
            <td><?php echo &data["cabang"].</td>
            <td><?php echo &data["diagnosis"].</td>
            <td>
                    <a href="#">Delete</a>
            </td>
        </tr>
    <?php $no++; } ?>
    </table>
    </form>