	<!DOCTYPE html>
	<html lang="en">
	<?php if ($flip == "true") { ?>

	<head>
	    <meta charset="UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>SSO HMJ :: <?= $title ?></title>
	    <link rel="stylesheet" href="<?= base_url() ?>assets/css/viewer.css" />
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.min.js"></script>
	    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/sso-logo.png" type="image/x-icon">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
	</head>

	<body>
	    <?php } else { ?>

	    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <meta name="description" content="">
	        <meta name="author" content="">

	        <title>SSO Informatics :: <?= $title ?></title>

	        <!-- Custom fonts for this template-->
	        <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	        <link
	            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	            rel="stylesheet">
	        <!-- Custom styles for this template-->
	        <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashboard.css" type="text/css">
	        <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
	            type="text/css">
	        <!-- Sweetalert -->
	        <link href="<?= base_url() ?>assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
	        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/sso-logo.ico" type="image/x-icon">
	        <!-- JQUREY Plugin -->
	        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
	        <!-- Lazyload Plugin -->
	        <script src="<?= base_url() ?>assets/js/plugins/lazysizes.min.js" async=""></script>

	    </head>

	    <body id="page-top">
	        <!-- Page Wrapper -->
	        <div id="wrapper">

	            <!-- Sidebar -->
	            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	                <!-- Sidebar - Brand -->
	                <a class="sidebar-brand d-flex align-items-center justify-content-center"
	                    href="<?= base_url() ?>sso_hmj">
	                    <div class="sidebar-brand-icon rotate-n-15">
	                        <img src="<?= base_url() ?>assets/img/sso-logo.png" class="lazyload"
	                            data-src="<?= base_url() ?>assets/img/sso-logo.png" alt="sso-logo" width="60rem">
	                    </div>
	                    <div class="sidebar-brand-text mx-3">SSO Informatics</div>
	                </a>

	                <!-- Divider -->
	                <hr class="sidebar-divider my-0">

	                <!-- Nav Item - Dashboard -->
	                <?php
						if ($active == "1") {
							echo '<li class="nav-item active">';
						} else {
							echo '<li class="nav-item">';
						}
						?>
	                <a class="nav-link" href="<?= base_url() ?>sso_hmj">
	                    <i class="fas fa-fw fa-tachometer-alt"></i>
	                    <span>Dashboard</span></a>
	                </li>

	                <!-- Divider -->
	                <hr class="sidebar-divider">
	                <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "2") { ?>
	                <!-- Heading -->
	                <div class="sidebar-heading">
	                    Layanan HMJ TI
	                </div>

	                <!-- Nav Item - Pages Collapse Menu -->
	                <?php
							if ($active == "2") {
								echo '<li class="nav-item active">';
							} else {
								echo '<li class="nav-item">';
							}
							?>
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
	                    aria-expanded="true" aria-controls="collapseTwo">
	                    <i class="fas fa-hotel"></i>
	                    <i><span class="text-warning">SI Inventaris (Off)</span></i>
	                </a>
	                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <h6 class="collapse-header">Daftar Fitur:</h6>
	                        <a class="collapse-item" href="<?= base_url() ?>inventaris/organisasi">Manajemen Organisasi</a>
	                        <a class="collapse-item" href="<?= base_url() ?>inventaris/peminjaman">Manajemen Peminjaman</a>
	                    </div>
	                </div>
	                </li>
	                <!-- Nav Item - Utilities Collapse Menu -->
	                <?php
							if ($active == "4") {
								echo '<li class="nav-item active">';
							} else {
								echo '<li class="nav-item">';
							}
							?>
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
	                    aria-expanded="true" aria-controls="collapseUtilities">
	                    <i class="fas fa-globe"></i>
	                    <span>Web HMJ</span>
	                </a>
	                <div id="collapseThree" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <h6 class="collapse-header">Daftar Fitur:</h6>
	                        <a class="collapse-item" href="<?= base_url() ?>web/tentang_hmj">Manajemen Kepengurusan</a>
	                        <a class="collapse-item" href="<?= base_url() ?>web/berkas">Manajemen Berkas</a>
	                        <a class="collapse-item" href="<?= base_url() ?>web/informasi_hmj">Manajemen Informasi</a>
	                    </div>
	                </div>
	                </li>
	                <!-- Nav Item - Utilities Collapse Menu -->
	                <?php
							if ($active == "5") {
								echo '<li class="nav-item active">';
							} else {
								echo '<li class="nav-item">';
							}
							?>
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
	                    aria-expanded="true" aria-controls="collapseUtilities">
	                    <i class="fas fa-calendar-day"></i>
	                    <span>Integer</span>
	                </a>
	                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <h6 class="collapse-header">Daftar Fitur:</h6>
	                        <a class="collapse-item" href="<?= base_url() ?>integer/kegiatan">Manajemen Kegiatan</a>
	                        <a class="collapse-item" href="<?= base_url() ?>integer/lomba">Manajemen Lomba</a>
	                    </div>
	                </div>
	                </li>
	                <?php } ?>
	                <?php
						if ($active == "10") {
							echo '<li class="nav-item active">';
						} else {
							echo '<li class="nav-item">';
						}
						?>
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
	                    aria-expanded="true" aria-controls="collapseUtilities">
	                    <i class="fas fa-vote-yea"></i>
	                    <span>Layanan Lain</span>
	                </a>

	                <div id="collapseSix" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <h6 class="collapse-header">Lainnya:</h6>
	                        <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "4" || $group[0]['group_id'] == "5") { ?>
	                        <a class="collapse-item" href="<?= base_url() ?>eors">E-ORS</a>
	                        <?php } ?>
	                        <?php if ($group[0]['group_id'] == "1" || $group[0]['group_id'] == "6") { ?>
	                        <a class="collapse-item" href="<?= base_url() ?>etika">ETIKA</a>
	                        <?php } ?>
	                    </div>
	                </div>
	                </li>
	                <!-- Divider -->
	                <hr class="sidebar-divider">

	                <!-- Heading -->
	                <?php if ($group[0]['group_id'] == "1") { ?>
	                <div class="sidebar-heading">
	                    Pengaturan Website
	                </div>
	                <!-- Nav Item - Charts -->
	                <?php
							if ($active == "6") {
								echo '<li class="nav-item active">';
							} else {
								echo '<li class="nav-item">';
							}
							?>
	                <a class="nav-link" href="<?= base_url() ?>admin">
	                    <i class="fas fa-fw fa-cog"></i>
	                    <span>Manajemen Website</span></a>
	                </li>
	                <?php
							if ($active == "7") {
								echo '<li class="nav-item active">';
							} else {
								echo '<li class="nav-item">';
							}
							?>
	                <a class="nav-link" href="<?= base_url() ?>admin/backup_database">
	                    <i class="fas fa-download"></i>
	                    <span>Backup Database</span></a>
	                </li>
	                <?php
							if ($active == "8") {
								echo '<li class="nav-item active">';
							} else {
								echo '<li class="nav-item">';
							}
							?>
	                <a class="nav-link" href="<?= base_url() ?>admin/import_database">
	                    <i class="fas fa-upload"></i>
	                    <span>Import Database</span></a>
	                </li>
	                <!-- Divider -->
	                <hr class="sidebar-divider d-none d-md-block">
	                <?php } ?>
	                <?php
						if ($active == "9") {
							echo '<li class="nav-item active">';
						} else {
							echo '<li class="nav-item">';
						}
						?>
	                <a class="nav-link" href="<?= base_url() ?>about">
	                    <i class="fas fa-info-circle"></i>
	                    <span>About</span></a>
	                </li>
	                <!-- Sidebar Toggler (Sidebar) -->
	                <div class="text-center d-none d-md-inline">
	                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
	                </div>

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
	                            <!-- Nav Item - User Information -->
	                            <li class="nav-item dropdown no-arrow">
	                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
	                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                    <span
	                                        class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($group[0]['first_name']); ?></span>
	                                    <i class="fas fa-user-circle fa-2x"></i>
	                                </a>
	                                <!-- Dropdown - User Information -->
	                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
	                                    aria-labelledby="userDropdown">
	                                    <a class="dropdown-item" href="<?= base_url() ?>admin/ubah_password">
	                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
	                                        Ubah Password
	                                    </a>
	                                    <div class="dropdown-divider"></div>
	                                    <a class="dropdown-item log-out" href="<?= base_url() ?>auth/logout">
	                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
	                                        Logout
	                                    </a>
	                                </div>
	                            </li>

	                        </ul>

	                    </nav>
	                    <!-- End of Topbar -->

	                    <?php } ?>
	                    <div class="berhasil" data-berhasil="<?= $this->session->flashdata('berhasil') ?>"></div>
	                    <div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
	                    <div class="gagal" data-gagal="<?= validation_errors() ?>"></div>