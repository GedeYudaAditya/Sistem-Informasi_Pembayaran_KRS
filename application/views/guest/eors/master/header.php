<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>E-ORS - <?= $title ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url() ?>assets/img/logo/NAV.png" />

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/eors.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/cardStyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/intro.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

</head>
<?php if ($body == 1) { ?>

<body class="homepage-2">
    <?php } else { ?>

    <body class="blog">
        <?php } ?>
        <!--====== Preloader Area Start ======-->
        <div class="preloader-main">
            <div class="preloader-wapper">
                <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                    <defs>
                        <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8"
                                result="goo" />
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
        <div class="berhasil" data-berhasil="<?= $this->session->flashdata('berhasil') ?>"></div>
        <div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
        <div class="gagal" data-gagal="<?= validation_errors() ?>"></div>