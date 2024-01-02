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

<h1><center>Daftar Karyawan</center></h1>

<center><a href="tambah.php">Tambah data Karyawan</a></center>
<br>
<form action="" method="post">

   <center> <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button></center>
    
</form>
<br><br>

<br>
<center><table border="2" cellpadding="10"cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
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
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');">ubah</a> 
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
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
