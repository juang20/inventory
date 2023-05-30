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
			<h1>Kategori</h1>
			<hr>
			<a class="btn-tambah-item" href="<?= site_url('kategori/tambah_kategori') ?>"><i class="fa fa-plus"></i>  Tambah Kategori</a>
		
		<table class="tabel-item" border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Kategori</th>
					<th>Nama Kategori</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$count = 0;
					foreach ($queryKategori as $row){
						$count = $count + 1;
				 ?>
				<tr>
					<td><?php echo $count ?></td>
					<td><?php echo $row->id_kategori ?></td>
					<td><?php echo $row->nama_kategori ?></td>
					<td><?php echo $row->keterangan ?></td>
					<td>
						<a href="<?php echo site_url('kategori/halamanEdit') ?>/<?php echo $row->id_kategori ?>">Edit </a> 
						<a href="<?php echo site_url('kategori/fungsiDeleteDataKategori') ?>/<?php echo $row->id_kategori ?>">Delete </a> 
					</td>
				</tr>

			<?php } ?>
			<!-- 	<tr>
					<td>1</td>
					<td>COM-01</td>
					<td>PC Lenovo</td>
					<td>Komputer</td>
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
					<td>
						<a href="">Edit</a>
						<a href="">Hapus</a>
					</td>
				</tr> -->
			</tbody>
		</table>
		</div>
	</div>
</body>
</html>