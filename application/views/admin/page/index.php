<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('message')) : ?>
    <div class="modal fade" id="modalInfoLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selamat Datang, <span class="text-primary">
                            <?= ucfirst($group[0]['first_name']); ?></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-5">Login Berhasil, Semoga Harimu Menyenangkan :)<br>
                        Mohon jaga username dan password Anda <br>
                        ~ Admin HMJ TI Undiksha
                    </p>
                    <hr>
                    <p class="text-center text-primary" style="font-size: 14px;">SSO HMJ Undiksha
                        2.<?= date('Y') % 3 ?>.<?= date('Y') * date('m') / 5 ?>
                        -
                        Blockchain <br></p>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $admin ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Sistem Aktif
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $sistem ?> Sistem</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Waktu dan Tanggal
                                <div class="col-auto col-12 row">
                                    <div class="h5 mb-0 mr-2 text-xs font-weight-bold text-gray-800">
                                        <?= date("d, M Y") ?></div>
                                </div>
                                <div class="col-auto col-12 row">

                                    <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="jam"></div>
                                    <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="menit"></div>
                                    <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="detik"></div>
                                </div>
                            </div>
                            <div class="p mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Selamat Datang User <?= ucfirst($group[0]['first_name']); ?>
            </h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <p> Sistem Informasi Manajemen Satu Pintu (SSO) HMJ TI Undiksha, Berikut Informasi Anda :</p>
                <ul>
                    <li>Username Anda Adalah <span
                            class="m-0 font-weight-bold text-primary"><?= $group[0]['email']; ?></span></li>
                    <li>NIM Anda Adalah <span
                            class="m-0 font-weight-bold text-primary"><?= ucfirst($group[0]['last_name']); ?></span>
                    </li>
                    <li>No Telepon/WA Anda Adalah <span
                            class="m-0 font-weight-bold text-primary"><?= ucfirst($group[0]['phone']); ?></span></li>
                    <li>Anda Login Sebagai <span
                            class="m-0 font-weight-bold text-primary"><?= ucfirst($group[0]['nama_pilihan']); ?></span>
                    </li>
                </ul>
                <p>Jaga Selalu Username dan Password Anda</p>
            </div>
        </div>
    </div>
    <!-- Content Row -->

</div>
<!-- /.container-fluid -->