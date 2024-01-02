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
    <title>HALAMAN TOKO BAROKAH</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1><center>Daftar Karyawan Toko Barokah</center></h1>


<br>
<center><table border="2" cellpadding="25" cellspacing="0">

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
    </tr></center>

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

</body>
</html>
