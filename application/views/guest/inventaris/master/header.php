<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Title  -->
	<title>HMJ TI Undiksha - <?= $title ?></title>

	<!-- Favicon  -->
	<link rel="icon" href="<?= base_url() ?>assets/img/logo/NAV.png" />

	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

	<!-- ***** All CSS Files ***** -->
	<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<!-- Style css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/guest-style.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/inventaris.css" />

	<!-- Responsive css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


</head>

<body>
	<!--====== Preloader Area Start ======-->
	<div class="preloader-main">
		<div class="preloader-wapper">
			<svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
				<defs>
					<filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
					</filter>
				</defs>
				<g filter="url(#goo)">
					<circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
					<circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
				</g>
			</svg>
			<div>
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</div>

	<header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
		<div class="container position-relative">
			<a class="navbar-brand" href="<?= base_url() ?>web/home">
				<img class="navbar-brand-regular" src="<?= base_url() ?>assets/img/logo/NAV.png" alt="brand-logo" />
				<img class="navbar-brand-sticky" src="<?= base_url() ?>assets/img/logo/NAV.png" alt="sticky brand-logo" />
			</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-inner">
				<!--  Mobile Menu Toggler -->
				<button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<nav>
					<ul class="navbar-nav" id="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>inventaris/home">Home</a>
						</li>
						<?php if (!isset($_SESSION['Inv_Login'])) : ?>
							<li class="nav-item">
								<button type="button" class="nav-link bg-transparent border border-0" data-toggle="modal" data-target="#modalLogin">Login</button>
							</li>
						<?php else : ?>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url() ?>inventaris/lihatPermintaan">Daftar Permintaan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url() ?>inventaris/invlogout">Logout</a>
							</li>
						<?php endif; ?>
						<!-- <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>web/repositori">Repositori</a>
                                        </li> -->
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!--====== Scroll To Top Area Start ======-->
	<div id="scrollUp" title="Scroll To Top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<!--====== Scroll To Top Area End ======-->