<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<center>
		<h1>Edit Data Mahasiswa</h1>
	</center>
    <?php foreach($mahasiswa as $u): ?>
	<form action="<?php echo base_url(). 'index.php/kampus/update'; ?>" method="POST" enctype="multipart/form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td>
                    <input type="hidden" name="id" value="<?= $u->id; ?>">
                    <input type="text" name="nim" value="<?= $u->nim; ?>">
                </td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?= $u->nama; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?= $u->alamat;?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?= $u->pekerjaan;?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"> <?php echo anchor('kampus/index','<input type=button value=Kembali>'); ?></td>
			</tr>
		</table>
    </form>
    <?php endforeach; ?>
</body>
</html>