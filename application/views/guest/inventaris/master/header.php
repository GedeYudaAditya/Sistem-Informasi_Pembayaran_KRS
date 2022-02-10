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

	<!-- ***** All CSS Files ***** -->
	<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<!-- Style css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/guest-style.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/inventaris.css" />

	<!-- Responsive css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />


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

	<!--====== Scroll To Top Area Start ======-->
	<div id="scrollUp" title="Scroll To Top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<!--====== Scroll To Top Area End ======-->
