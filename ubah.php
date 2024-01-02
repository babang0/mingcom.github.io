<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'halaman_admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'halaman_admin.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Karyawan</title>
</head>
<body>
	
	<style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('wkwk.jpeg');
      margin: 0;
      padding: 0;
      display: flex; 
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    body h5 {
      te
    }

    form {
      background-color: whitesmoke;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 750px;
      
    }

    label {
      display: block;
      margin: auto;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;


    }

    button:hover {
      background-color: #45a049;
    }
  </style>
	

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
		<ul  type="none">

			<h1><center>Ubah data Karyawan</center></h1>

			<li>
				<label for="nama">nama  </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="alamat">alamat  </label>
				<input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"]; ?>">
			</li>
			<li>
				<label for="umur">umur </label>
				<input type="text" name="umur" id="umur" value="<?= $mhs["umur"]; ?>">
			</li>
			<li>
				<label for="status">status </label>
				<input type="text" name="status" id="status" value="<?= $mhs["status"]; ?>">
			</li>
			<li>
				<label for="Gmail">Gmail </label>
				<input type="text" name="Gmail" id="Gmail" value="<?= $mhs["Gmail"]; ?>">
			</li>
			<li>
				<label for="posisi">posisi </label>
				<input type="text" name="posisi" id="posisi" value="<?= $mhs["posisi"]; ?>">
			</li>
			<li>
				<label for="nohp">nohp </label>
				<input type="text" name="nohp" id="nohp"value="<?= $mhs["nohp"]; ?>">
			</li>
			<li>
			<li>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>
