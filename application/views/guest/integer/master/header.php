<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?= strtoupper($kegiatan[0]['nama_integer']) ?> - <?= $title ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url() ?>assets/img/logo/NAV.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/integer.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/intro.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

</head>

<?php if ($body == "1") { ?>

<body class="homepage-2">
    <?php } else if ($body == "2") { ?>

    <body class="blog">
        <?php } else if ($body == "3") { ?>

        <body class="inner">
            <?php } ?>
            <!--====== Preloader Area Start ======-->
            <div class="preloader-main">
                <div class="preloader-wapper">
                    <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                        <defs>
                            <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                <feColorMatrix in="blur" mode="matrix"
                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
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

            <div class="main">
                <?php if ($body == "1") { ?>

                <header class="navbar navbar-sticky navbar-expand-lg navbar-dark d-none">
                    <?php } else if ($body == "2" || $body == "3") { ?>

                    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
                        <?php } ?>
                        <!-- ***** Header Start ***** -->

                        <div class="container position-relative">
                            <a class="navbar-brand" href="index.html">
                                <img class="navbar-brand-regular" src="<?= base_url() ?>assets/img/logo/NAV.png"
                                    alt="brand-logo" />
                                <img class="navbar-brand-sticky" src="<?= base_url() ?>assets/img/logo/NAV.png"
                                    alt="sticky brand-logo" />
                            </a>
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="navbar-inner">
                                <!--  Mobile Menu Toggler -->
                                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <nav>
                                    <ul class="navbar-nav" id="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>integer/home">Beranda</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>integer/lomba_integer">Lomba</a>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="<?= base_url() ?>integer/jadwal_integer">Jadwal</a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>integer/kabar_integer">Kabar
                                                Integer</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </header>
                    <!-- ***** Header End ***** -->