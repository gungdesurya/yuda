<!DOCTYPE html>
<html>

<head>
	<title>Bursa Kerja</title>
	<!--Import Google Icon Font-->
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= site_url() ?>assets/css/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	<nav class="white black-text">
		<div class="nav-wrapper">
			<a href="<?= site_url() ?>" class="blue-text brand-logo"><b>Jobpply </b></a>
			<?php if (!$isLoggedIn) : ?>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a class="waves-effect waves-light btn blue dropdown-trigger" href='#' data-target='login'>Login</a></li>
					<li><a class="waves-effect waves-light btn blue darken-3 dropdown-trigger" href='#' data-target='signup'>Daftar</a></li>
				</ul>

				<ul id='login' class='dropdown-content' style="width: 200px">
					<li><a href="<?= site_url('login/pelamar') ?>">Login Pelamar</a></li>
					<li><a href="<?= site_url('login/perusahaan') ?>">Login Perusahaan</a></li>
				</ul>

				<ul id='signup' class='dropdown-content'>
					<li><a href="<?= site_url('daftar/pelamar') ?>">Daftar Pelamar</a></li>
					<li><a href="<?= site_url('daftar/perusahaan') ?>">Daftar Perusahaan</a></li>
				</ul>
			<?php else : ?>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<?php if ($tipe == 'pelamar') : ?>
						<li><a class="waves-effect waves-light btn blue" href='<?= site_url('pelamar/Dashboard') ?>'>Dashboard</a></li>
					<?php else : ?>
						<li><a class="waves-effect waves-light btn blue" href='<?= site_url('perusahaan-s/perusahaan/profil') ?>'>Profil</a></li>
					<?php endif ?>
					<li><a class="waves-effect waves-light btn red" href='<?= site_url('Home/logout') ?>'>Logout</a></li>
				</ul>
			<?php endif ?>
		</div>
	</nav>
	<!-- END nav -->