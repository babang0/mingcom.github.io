<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'halaman_admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Karyawan</title>
</head>
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
      padding: 55px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 750px;
      position: center;
      
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
<body>
      

	<center><form action="" method="post" enctype="multipart/form-data">
		<h1>Tambah Daftar Karyawan</h1>
		<ul type="none">
			<li>
				<label for="nama">nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="alamat">alamat : </label>
				<input type="text" name="alamat" id="alamat">
			</li>
			<li>
				<label for="umur">umur :</label>
				<input type="text" name="umur" id="umur">
			</li>
			<li>
				<label for="status">status :</label>
				<input type="text" name="status" id="status">
			</li>
			<li>
				<label for="Gmail">Gmail :</label>
				<input type="text" name="Gmail" id="Gmail">
			</li>
			<li>
				<label for="posisi">posisi :</label>
				<input type="text" name="posisi" id="posisi">
			</li>
			<li>
				<label for="nohp">nohp :</label>
				<input type="text" name="nohp" id="nohp">
			</li>
			<li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>
