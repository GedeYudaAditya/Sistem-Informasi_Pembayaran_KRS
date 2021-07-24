<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ETIKA HMJ TI Undiksha .:: <?= $title ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url() ?>assets/img/hmj-logo.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/etikaStyle.css">
    <!-- Jquery -->
    <script src="<?= base_url() ?>assets/js/jquery/jquery-3.3.1.min.js"></script>
</head>
<?php if ($body == 1) : ?>

<body class="homepage-5">
    <?php elseif ($body == 2) : ?>

    <body class="blog">
        <?php elseif ($body == 3) : ?>

        <body class="homepage-5 accounts">
            <?php elseif ($body == 4) : ?>

            <body class="accounts">
                <?php endif; ?>
                <!--====== Scroll To Top Area Start ======-->
                <div id="scrollUp" title="Scroll To Top">
                    <i class="fas fa-arrow-up"></i>
                </div>
                <!--====== Scroll To Top Area End ======-->
                <div class="preloader-main">
                    <div class="preloader-wapper">
                        <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600"
                            height="200">
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
                <div class="main">
                    <!-- ***** Header Start ***** -->
                    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
                        <div class="container position-relative">
                            <a class="navbar-brand" href="<?= base_url() ?>etika/home">
                                <img class="navbar-brand-regular" src="<?= base_url() ?>assets/img/logo/NAV.png"
                                    alt="brand-logo">
                                <img class="navbar-brand-sticky" src="<?= base_url() ?>assets/img/logo/NAV.png"
                                    alt="sticky brand-logo">
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
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="<?= base_url() ?>etika/home">
                                                Beranda
                                            </a>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>etika/voting_kegiatan">Daftar
                                                Kegiatan</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </header>
                    <!-- ***** Header End ***** -->
                    <div class="berhasil" data-berhasil="<?= $this->session->flashdata('berhasil') ?>"></div>
                    <div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
                    <div class="tidak-ditemukan"
                        data-tidak-ditemukan="<?= $this->session->flashdata('tidak-ditemukan'); ?>">
                        <div class="ditemukan" data-ditemukan="<?php
                                                                $datas = $this->session->flashdata('ditemukan');
                                                                if (!empty($datas)) {
                                                                    foreach ($datas as $key => $value) {
                                                                        $id_key = $key;
                                                                        echo "[ Kegiatan " . $value['nama_kegiatan'] . " ] ";
                                                                    }
                                                                }
                                                                ?>">
                        </div>