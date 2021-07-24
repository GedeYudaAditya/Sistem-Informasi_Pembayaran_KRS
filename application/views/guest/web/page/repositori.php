<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex
	align-items-center">
    <div class="container">
        <div class="row align-items-center overflow-hidden">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7 col-lg-6">
                <div class="welcome-intro">
                    <h1 class="text-white">Repository HMJ Teknik Informatika Undiksha</h1>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6">
                <!-- Welcome Thumb -->
                <div class="col-12 col-md-5 col-lg-6">
                    <!-- Welcome Thumb -->
                    <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="<?= base_url() ?>assets/img/maskot/repository.png"
                            data-src="<?= base_url() ?>assets/img/maskot/repository.png" class="h-100 mw-auto lazyload"
                            style="max-width: unset; margin-left: -50px;" alt="Maskot TI" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
            <title>sApp Shape</title>
            <desc>Created with Sketch</desc>
            <defs></defs>
            <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                    <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454
						395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212
						637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577
						1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359
						1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574
						1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675
						1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                </g>
            </g>
        </svg>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Area Start ***** -->
<section id="features" class="section features-area style-two overflow-hidden
	ptb_100">
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
                    <h2>Tahun Kepengurusan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($kepengurusans as $kepengurusan) : ?>
            <div class="col-12 col-md-6 col-lg-4 res-margin mb-4">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload" src="<?= base_url() ?>assets/img/icon/featured-img/library.png"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/library.png" alt="" />
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2"><?= $kepengurusan['nama_hmj'] ?></h3>
                        <p>
                            <?= $kepengurusan['deskripsi_hmj'] ?>
                        </p>
                        <a href="<?= base_url() ?>web/kegiatan/<?= $kepengurusan['id_hmj']; ?>"
                            class="btn btn-bordered mt-3">Show More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ***** Features Area End ***** -->