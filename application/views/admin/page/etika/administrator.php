<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Kegiatan <span
                class="text-primary"><?= ucwords($kegiatan[0]['nama_kegiatan']) ?></span>
        </h1>
    </div>
    <?php
    if (new DateTime(date('Y-m-d H:i:s')) > new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
    <div class="alert alert-danger col-12" role="alert">
        Waktu Voting Telah Usai !!
    </div>
    <?php elseif (new DateTime(date('Y-m-d H:i:s')) >= new DateTime($kegiatan[0]['waktu_mulai'])  && new DateTime(date('Y-m-d H:i:s')) <= new DateTime($kegiatan[0]['waktu_selesai'])) : ?>
    <div class="alert alert-success col-12" role="alert">
        <?php
            $tgl_selesai = new DateTime($kegiatan[0]['waktu_selesai']);
            $tgl_hari_ini = new DateTime(date('Y-m-d H:i:s'));

            $diff = $tgl_selesai->diff($tgl_hari_ini);
        echo "Voting Berakhir dalam " . $diff->d . " hari " . $diff->h . " jam " . $diff->i . " menit ";
            ?>
    </div>
    <?php else : ?>
    <div class="alert alert-secondary col-12" role="alert">
        Waktu Voting Belum Dimulai!!
    </div>
    <?php endif; ?>
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pemilih</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_pemilih ?> Pemilih</div>
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
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Surat Masuk </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_sudah_voting ?> Pemilih</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-sign-in-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Belum Memilih
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jml_belum_voting ?>
                                        Pemilih</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-gray-300"></i>
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
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Waktu Sekarang
                                <div class="col-auto col-12 row">
                                    <div class="h5 mb-0 mr-2 text-xs font-weight-bold text-gray-800">
                                        <?= date('d F Y') ?></div>
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
    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCard1">
                    <h6 class="m-0 font-weight-bold text-primary">Fitur Live Count
                    </h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCard1">
                    <div class="card-body">
                        <p class="text-justify"> Fitur ini digunakan untuk melihat grafik diagram hasil berjalannya
                            pemilihan secara
                            real-time. Pada fitur
                            ini Anda dapat melihat progres pemilihan berdasarkan Prodi Pemilih, Semester, Jumlah
                            Pemilih, dan
                            Rasio
                            Kandidat</p>
                        <a
                            href="<?=base_url()?>etika/live_count/<?=base64_encode(base64_encode($kegiatan[0]['id_kegiatan']))?>"><button
                                class="btn btn-primary col-lg-12"> <i class="fas fa-sign-in-alt"></i>
                                Manajemen
                                Data</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCard2">
                    <h6 class="m-0 font-weight-bold text-primary">Manajemen Evote
                    </h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCard2">
                    <div class="card-body">
                        <p class="text-justify"> Fitur ini digunakan untuk melihat status memilih, memodifikasi,
                            mereset, dan menggenerate
                            token yang akan dikirimkan melalui email pemilih. Terdapat fitur generate alternatif token
                            bagi yang bermasalah dengan email</p>
                        <a
                            href="<?= base_url() ?>etika/manajemen_evote/<?= base64_encode(base64_encode($id_kegiatan)) ?>">
                            <button class="btn btn-primary col-lg-12"> <i class="fas fa-sign-in-alt"></i>
                                Manajemen
                                Data</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard3" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCard3">
                    <h6 class="m-0 font-weight-bold text-primary">Database Pemilih
                    </h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCard3">
                    <div class="card-body">
                        <p class="text-justify"> Fitur ini digunakan untuk melihat, menambahkan, menghapus, dan mengubah
                            data pemilih yang
                            akan mengikuti pemilihan sesuai dengan kegiatan yang diatur. Terdapat fitur upload excel
                            guna memudahkan pengisian data pemilih</p>
                        <a
                            href="<?= base_url() ?>etika/database_pemilih/<?= base64_encode(base64_encode($id_kegiatan)) ?>"><button
                                class="btn btn-primary col-lg-12"> <i class="fas fa-sign-in-alt"></i>
                                Manajemen
                                Data</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard4" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCard4">
                    <h6 class="m-0 font-weight-bold text-primary">Database Kandidat
                    </h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCard4">
                    <div class="card-body">
                        <p class="text-justify"> Fitur ini digunakan untuk melihat, menambahkan, menghapus, dan mengubah
                            data kandidat yang
                            mengikuti kegiatan pemilihan ini. Gunakan ukuran foto 4:6 agar hasil foto yang muncul di
                            website menjadi lebih bagus</p>
                        <a href="<?= base_url() ?>etika/kandidat/<?= base64_encode(base64_encode($id_kegiatan)) ?>"><button
                                class="btn btn-primary col-lg-12"> <i class="fas fa-sign-in-alt"></i>
                                Manajemen
                                Data</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Collapsable Card Example -->

    <!-- Content Row -->

</div>
<!-- /.container-fluid -->