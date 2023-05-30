<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= isset($meta['title']) ? $meta['title'] : 'Inventory' ?> </title>
		<style type="text/css">
		.content {
			margin-top: 100px;
			margin-left: 300px;
		}
	</style>
</head>
<body>
	<?php $this->load->view('template/topbar'); ?>
	<?php $this->load->view('template/sidebar'); ?>
	<div class="content">
		<h1>Halo,</h1>
		<h1>Halaman Supplier</h1>
	</div>
</body>
</html>