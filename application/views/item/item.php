<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= isset($meta['title']) ? $meta['title'] : 'Inventory' ?> </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/item_style.css') ?>">
</head>
	<?php $this->load->view('template/topbar'); ?>
	<?php $this->load->view('template/sidebar'); ?>
<body>
	<div class="content">
		<div class="wrapper">
			<h1>Items</h1>
			<hr>
			<a class="btn-tambah-item" href=""><i class="fa fa-plus"></i>  Tambah Item</a>
		
		<table class="tabel-item" border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Item</th>
					<th>Nama Item</th>
					<th>Kategori</th>
					<th>Lokasi</th>
					<th>Qty</th>
					<th>Created At</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>COM-01</td>
					<td>PC Lenovo</td>
					<td>Komputer</td>
					<td>Room 1</td>
					<td>100</td>
					<td>15-05-2023</td>
					<td>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>COM-01</td>
					<td>PC Lenovo</td>
					<td>Komputer</td>
					<td>Room 1</td>
					<td>100</td>
					<td>15-05-2023</td>
					<td>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>COM-01</td>
					<td>PC Lenovo</td>
					<td>Komputer</td>
					<td>Room 1</td>
					<td>100</td>
					<td>15-05-2023</td>
					<td>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>COM-01</td>
					<td>PC Lenovo Windows 11 Pro</td>
					<td>Komputer</td>
					<td>Room 1</td>
					<td>100</td>
					<td>15-05-2023</td>
					<td>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>COM-01</td>
					<td>PC Lenovo</td>
					<td>Komputer</td>
					<td>Room 1</td>
					<td>100</td>
					<td>15-05-2023</td>
					<td>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
</body>
</html>