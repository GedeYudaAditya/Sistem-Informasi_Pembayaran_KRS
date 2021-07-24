<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ETIKA HMJ TI Undiksha .:: <?= $title ?></title>
    <link rel="icon" href="<?= base_url() ?>assets/img/hmj-logo.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/dashboard.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url() ?>assets/img/logo/NAV.png" width="35px" alt="">
                </div>
                <div class="sidebar-brand-text mx-2">SISTEM ETIKA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if ($active == 1) : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url() ?>etika/dashboard">
                    <i class="fas fa-fw fa-vote-yea"></i>
                    <span>Voting Kandidat</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaturan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php if ($active == 2) : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>
                <?php if ($kegiatan[0]['mode'] == 1 && $pemilih[0]['has_voting'] == 0) : ?>
                <a class="nav-link" href="<?= base_url() ?>etika/ganti_token">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ganti Token</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link log-out" href="<?= base_url() ?>etika/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $pemilih[0]['nama_pemilih'] ?></span>
                                <i class="fas fa-user-circle fa-2x"></i>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="login" data-login="<?= $this->session->flashdata('login'); ?>">
                    <div class="berhasil" data-berhasil="<?= $this->session->flashdata('berhasil') ?>"></div>
                    <div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>