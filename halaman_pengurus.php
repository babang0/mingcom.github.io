<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pengurus</title>
</head>
<body>
  <style type="text/css">
       body{
        font-family: sans-serif;
        background: Cyan;
       }

    </style>



	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman pengurus</title>
</head>
<body>

<center><daftar><h1>Daftar karyawan</h1></daftar>

<br>
<table border="2" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>nama</th>
        <th>alamat</th>
        <th>umur</th>
        <th>status</th>
        <th>Gmail</th>
        <th>posisi</th>
        <th>nohp</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["umur"]; ?></td>
        <td><?= $row["status"]; ?></td>
         <td><?= $row["Gmail"]; ?></td>
        <td><?= $row["posisi"]; ?></td>
        <td><?= $row["nohp"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
</table>
</center>
<center>
    <br/>
<a href="cetak.php" target="_blank"><button>CETAK</button></a>
<a href="unduh.php" target="_blank"><button>UNDUH</button></a>

</center></body>
</html>

