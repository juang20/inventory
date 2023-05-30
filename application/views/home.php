<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= isset($meta['title']) ? $meta['title'] : 'Inventory' ?> </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/home_style.css') ?>">
</head>
<body>
	<?php $this->load->view('template/topbar'); ?>
	<?php $this->load->view('template/sidebar'); ?>
	<div class="content">
		<h1>Welcome Home</h1>
		<p>Sistem Inventory</p>
		<br>
		<hr>

		<div class="btn-wrapper">
			<a class="btn btn-home" href="<?= site_url('home') ?>"><i class="fa fa-home"></i>  Home</a>
			<a class="btn btn-dasboard" href="<?= site_url('dasboard') ?>"><i class="fa fa-bars"></i>  Dasboard</a>
			<a class="btn btn-item" href="<?= site_url('item') ?>"><i class="fa fa-gift"></i>  Item</a>
			<a class="btn btn-supplier" href="<?= site_url('supplier') ?>"><i class="fa fa-address-book"></i>  Supplier</a>
			<a class="btn btn-kategori" href="<?= site_url('kategori') ?>"><i class="fa fa-bookmark"></i>  Kategori</a>
			<a class="btn btn-user" href="<?= site_url('user') ?>"><i class="fa fa-user"></i>  User</a>
		</div>
	</div>
	
</body>
</html>