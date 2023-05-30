<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SideBar</title>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/sidebar_style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">

</head>
<body>
	<main>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fa fa-bars" id="btn"></i>
			<i class="fa fa-arrow-right" id="open"></i>
		</label>
		<div class="sidebar">
			<div class="top">
				Inventory
			</div>
			<ul>
				<li><a class="#" href="<?= site_url('home') ?>"><i class="fa fa-home"></i> Home</a></li>
				<li><a class="#" href="<?= site_url('dasboard') ?>"><i class="fa fa-bars"></i> Dashboard</a></li>
				<li><a class="#" href="<?= site_url('item') ?>"><i class="fa fa-gift"></i>  Item</a></li>
				<li><a class="#" href="<?= site_url('supplier') ?>"><i class="fa fa-address-book"></i>  Supplier</a></li>
                <li><a class="#" href="<?= site_url('kategori') ?>"><i class="fa fa-bookmark"></i>  Kategori</a></li>
                <li><a class="#" href="<?= site_url('user') ?>"><i class="fa fa-user"></i>  User</a></li>
                
			</ul>
<!-- 			<div id="btn-logout">
			<ul>
				<li><a class="#" href="#"><i class="fa fa-user-circle"></i>  Logout</a></li>
			</ul>
			</div> -->
		</div>
		
		
	</main>
</body>
</html>