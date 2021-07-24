<!-- ***** Kegiatan ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center
					text-center">
                    <h2 class="text-white text-capitalize">
                        <?= $kepengurusan[0]['nama_hmj'] ?>
                    </h2>
                    <ol class="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>web/home">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>web/repositori">Repositori</a></li>
                            <li class="breadcrumb-item active"><?= $kepengurusan[0]['nama_hmj'] ?></li>
                        </ol>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact" class="review-area bg-gray ptb_100 min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Go</span>
                        Technology
                    </span>
                    <h2>Berkas Kegiatan</h2>
                    <div class="input-group mb-3 mt-5">
                        <input type="text" class="form-control" placeholder="Masukan nama kegiatan"
                            aria-label="Recipient's username" aria-describedby="button-addon2" id="search-addon2" />
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($kegiatans as $kegiatan) : ?>
            <div class="col-12 col-md-6 col-lg-4 res-margin mb-4">
                <!-- Single Review -->
                <div class="single-review card">
                    <!-- Card Top -->
                    <div class="card-top p-4">
                        <h4 class="text-primary mt-4 mb-3"><?= $kegiatan['nama_kegiatan']; ?></h4>
                        <!-- Review Text -->
                        <div class="review-text">
                            <p>
                                <?= $kegiatan['deskripsi_kegiatan']; ?>
                            </p>
                            <a href="<?= base_url() ?>web/detail_kegiatan/<?= $kegiatan['id_kegiatan_hmj']; ?>"
                                class="btn btn-bordered mt-3">Lihat Detail</a>
                        </div>
                        <!-- Quotation Icon -->
                        <div class="quot-icon">
                            <img class="avatar-md lazyload" src="<?= base_url() ?>assets/img/icon/quote.png"
                                data-src="<?= base_url() ?>assets/img/icon/quote.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--====== Contact Area End ======-->