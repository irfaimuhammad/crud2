<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data Mahasiswa</title>
</head>
<body>
	<center>
		<h1>Input Data Mahasiswa</h1>
	</center>
	<form action="<?php echo base_url(). 'index.php/kampus/tambah_aksi'; ?>" method="POST" enctype="multipart/form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"> <input type="reset" value="Batal"> <?php echo anchor('kampus/index','<input type=button value=Kembali>'); ?></td>
			</tr>
		</table>
</body>
</html>