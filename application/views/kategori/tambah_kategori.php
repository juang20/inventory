<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= isset($data['title']) ? $data['title'] : 'Inventory' ?> </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/kategori_style.css') ?>">
</head>
<body>
	<?php $this->load->view('template/topbar'); ?>
	<?php $this->load->view('template/sidebar'); ?>
	<div class="content-kategori">
		<div class="wrapper">
			<h1>Form Tambah Kategori</h1>
			<hr>
		
		<form action="<?= site_url('kategori/proses_tambah_kategori') ?>" method="post">

		<table class="tabel-item" border="1">
			<thead>
				<tr>
					<td>ID Kategori</td>
					<td><input type="text" name="id_kategori" required></td>
				</tr>
				<tr>
					<td>Nama Kategori</td>
					<td><input type="text" name="nama_kategori" required></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan"></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<!-- <td><button class="btn-tambah-kategori" type="submit">Simpan Kategori</button></td> -->
					<td><input class="btn-simpan" type="submit" name="" value="Simpan"></td>
				</tr>
			</tbody>
		</table>
		</form>
		</div>
	</div>
</body>
</html>