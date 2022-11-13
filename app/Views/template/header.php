<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url() ?>">GEREJA KEHIDUPAN</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li id="about"><a href="<?php echo base_url() ?>/about">Tentang Kami</a></li> <!-- class="active" -->
				<li id="renungan"><a href="<?php echo base_url() ?>/renungan">Renungan</a></li>
				<li id="news" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Berita & Peristiwa
						<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>/news/gereja">Gereja</a></li>
						<li><a href="<?php echo base_url() ?>/news/sektor">Sektor</a></li>
					</ul>
				</li>
				<li id="jemaat"><a href="<?php echo base_url() ?>/jemaat">Informasi Jemaat</a></li>
				<li id="schedule" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jadwal Ibadah
						<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url() ?>/schedule/gereja">Gereja</a></li>
						<li><a href="<?php echo base_url() ?>/schedule/sektor">Sektor</a></li>
						<li><a href="<?php echo base_url() ?>/schedule/unit">Unit</a></li>
					</ul>
				</li>
				<li id="contact"><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</nav>