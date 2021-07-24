<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content text-center">
                    <h2 class="text-white text-capitalize">Daftar Kegiatan ETIKA</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>etika/home">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Kegiatan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Blog Area Start ***** -->
<section id="features" class="section features-area style-two overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-12 col-lg-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Go</span>
                        Technology
                    </span>
                    <h2>Kegiatan Tersedia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($kegiatan)) : ?>
            <?php foreach ($kegiatan as $data) : ?>
            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="featured-img text-center mb-3">
                        <img class="avatar-sm lazyload"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/support.png"
                            src="<?= base_url() ?>assets/img/icon/featured-img/support.png" alt="">
                    </div>
                    <?php
                            $saat_ini = date_create(date('Y-m-d H:i:s'));
                            $kegiatan_mulai = date_create($data['waktu_mulai']);
                            $kegiatan_selesai =  date_create($data['waktu_selesai']);
                            $diff_1 = date_diff($saat_ini, $kegiatan_mulai);
                            $diff_2 = date_diff($saat_ini, $kegiatan_selesai);
                            if (new Datetime(date('Y-m-d H:i:s')) < new Datetime($data['waktu_mulai'])) : ?>
                    <div class="alert alert-info" role="alert">
                        Dimulai Dalam
                        <?= $diff_1->d . " Hari " . $diff_1->h . " Jam " . $diff_1->i . " Menit" ?>
                    </div>
                    <?php elseif (new Datetime(date('Y-m-d H:i:s')) >= new Datetime($data['waktu_mulai']) && new Datetime(date('Y-m-d H:i:s')) <= new Datetime($data['waktu_selesai'])) : ?>
                    <div class="alert alert-info" role="alert">
                        Berakhir Dalam
                        <?= $diff_2->d . " Hari " . $diff_2->h . " Jam " . $diff_2->i . " Menit" ?>
                    </div>
                    <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                        Sudah Berakhir, Sampai Jumpa Dikegiatan Berikutnya
                    </div>
                    <?php endif; ?>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2 text-center"><?= $data['nama_kegiatan'] ?></h3>
                        <ul class="meta-info mt-3 d-flex justify-content-between">
                            <li>
                                <p>Mode Pemilihan</p>
                            </li>
                            <li>
                                <?php if ($data['mode'] == "1") : ?>
                                <p>Manual</p>
                                <?php elseif ($data['mode'] == "2") : ?>
                                <p>Semi Otomatis</p>
                                <?php else : ?>
                                <p>Otomatis</p>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <div class="text-justify mt-4"><?= $data['deskripsi'] ?></div>
                        <div class="row justify-content-center">
                            <?php if (!empty($this->session->userdata('id_kegiatan')) && $this->session->userdata('id_kegiatan') == $data['id_kegiatan']) : ?>
                            <a
                                href="<?= base_url() ?>etika/login_kegiatan/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>"><button
                                    class="btn mt-5">Lihat Detail</button></a>
                            <?php elseif (empty($this->session->userdata('id_kegiatan'))) : ?>
                            <a
                                href="<?= base_url() ?>etika/login_kegiatan/<?= base64_encode(base64_encode($data['id_kegiatan'])) ?>"><button
                                    class="btn mt-5">Lihat Detail</button></a>
                            <?php else : ?>
                            <a href="#"><button data-toggle="modal" data-target="#devModal" class="btn mt-5">Lihat
                                    Detail</button></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else : ?>
            <div class="col-lg-12 row justify-content-center">
                <div class="col-img-waiting text-center">
                    <h3 class="text-gray font-italic">Wahh, belum waktunya pemilihan :(</h3>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->
<!--====== Modal Error ======-->
<div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="devModalLabel">Notice</h4>
            </div>
            <div class="modal-body">
                <p>Anda Masih Login Dikegiatan Sebelumnya, Untuk melanjutkan Silahkan Log Out terlebih dahulu</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<!--====== Modal Developer Area End ======-->
<!--====== Footer Area Start ======-->
<footer class="section inner-footer bg-gray ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <!-- Footer Items -->
                <div class="footer-items text-center">
                    <!-- Logo -->
                    <a class="navbar-brand" href="#">
                        <img class="logo lazyload" src="<?= base_url() ?>assets/img/logo/NAV.png"
                            data-src="<?= base_url() ?>assets/img/logo/NAV.png" alt="">
                    </a>
                    <p class="mt-2 mb-3">Seluruh konten dibuat dan diunggah oleh Himpunan Mahasiswa Jurusan
                        Teknik Informatika Undiksha.</p>
                    <!-- Copyright Area -->
                    <div class="copyright-area border-0 pt-3">
                        Copyrights &copy;
                        <?= date("Y"); ?> HMJ TI Undiksha. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->
</div>