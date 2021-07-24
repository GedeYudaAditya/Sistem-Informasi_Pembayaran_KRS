    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="<?= base_url() ?>eors/home">
                    <img class="navbar-brand-regular lazyload" src="<?= base_url() ?>assets/img/logo/NAV.png"
                        data-src="<?= base_url() ?>assets/img/logo/NAV.png" alt="brand-logo" />
                    <img class="navbar-brand-sticky lazyload" data-src="<?= base_url() ?>assets/img/logo/NAV.png"
                        src="<?= base_url() ?>assets/img/logo/NAV.png" alt="sticky brand-logo" />
                </a>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-inherit h-100vh overflow-hidden">
            <div class="shapes-container">
                <div class="bg-shape"></div>
            </div>
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-5 order-0 order-lg-1 order-md-1">
                        <!-- Welcome Thumb -->
                        <div class=" welcome-thumb" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                            <img src="<?= base_url() ?>assets/img/maskot/welcome.png" class="lazyload"
                                data-src="<?= base_url() ?>assets/img/maskot/welcome.png" style="max-width: unset;"
                                alt="Maskot">
                        </div>
                    </div>
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7">
                        <div class="welcome-intro">
                            <h1>
                                Electronic Open Recruitment System HMJ TI UNDIKSHA
                            </h1>
                            <p class="my-4">Electronic Open Recruitment System adalah sebuah sistem pendaftaran berbasis
                                website yang digunakan untuk pendaftaran kepanitiaan ataupun keanggotaan di lingkungan
                                HMJ Jurusan Teknik Informatika.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Tujuan Area Start ***** -->
        <section id="features" class="section features-area ptb_100 bg-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Tujuan E-ORS</h2>
                            <p class="mt-4">Ada beberapa tujuan pembuatan Electronic Open Recruitment System HMJ TI,
                                diantaranya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <i class="far fa-window-maximize" style="font-size: 5rem"></i>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Mudah Digunakan</h3>
                                <p>Mempermudah dalam melakukan kegiatan Open Recruitment kepanitiaan atapun keanggotaan
                                    HMJ
                                    TI Undiksha</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <i class="fab fa-envira" style="font-size: 5rem"></i>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Ramah Kertas</h3>
                                <p>Mengurangi penggunaan kertas sekali pakai yang biasanya digunakan dalam setiap berkas
                                    yang dikumpul pada kegiatan Open Recruitment secara konvensional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <i class="fas fa-tasks" style="font-size: 5rem"></i>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Proses Mudah</h3>
                                <p>Mempermudah dalam melakukan pendataan, melakukan wawancara, penilaian wawancara,
                                    hingga
                                    memberikan keputusan akhir penerimaan peserta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Tujuan Area End ***** -->

        <!-- ***** Kepanitiaan Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="section-heading text-center" id="kepanitiaan">
                <h2>Kepanitiaan yang Bisa Diikuti</h2>
            </div>
            <div class="container">
                <div class="row">
                    <?php if (!empty($kegiatan)) { ?>
                    <?php foreach ($kegiatan as $data) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="t-cards blog-thumb">
                                <img class="lazyload"
                                    data-src="<?= base_url() ?>assets/upload/Folder_<?= $data['nama_kegiatan'] ?>/<?= $data['icon_kegiatan'] ?>"
                                    src="<?= base_url() ?>assets/upload/Folder_<?= $data['nama_kegiatan'] ?>/<?= $data['icon_kegiatan'] ?>"
                                    alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <?php if (date('Y-m-d H:i:s') < $data['tgl_mulai']) {
                                            $start = new Datetime(date('Y-m-d H:i:s'));
                                            $end = new Datetime($data['tgl_mulai']);
                                            $interval = $start->diff($end);
                                        ?>
                                <p>Dimulai dalam <?= $interval->d ?> hari <?= $interval->h ?> jam <?= $interval->i ?>
                                    menit</p>
                                <?php } else if (date('Y-m-d H:i:s') >= $data['tgl_mulai'] && date('Y-m-d H:i:s') <= $data['tgl_akhir']) {
                                            $start = new Datetime(date('Y-m-d H:i:s'));
                                            $end = new Datetime($data['tgl_akhir']);
                                            $interval = $start->diff($end);
                                        ?>
                                <p>Berakhir dalam <?= $interval->d ?> hari <?= $interval->h ?> jam <?= $interval->i ?>
                                    menit</p>
                                <?php } else { ?>
                                <p>Pendaftaran Telah Berakhir</p>
                                <?php } ?>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><?= $data['nama_kegiatan'] ?></h3>
                                <p>
                                    <?php
                                            echo (str_word_count($data['deskripsi']) > 20 ? substr($data['deskripsi'], 0, 75) . "... <br>" : $data['deskripsi'])
                                            ?>
                                    <?php if (date('Y-m-d H:i:s') > $data['tgl_akhir'] || $data['pengumuman'] == 1) { ?>
                                    <a href="<?= base_url() ?>eors/lihat_hasil/<?= $data['nama_kegiatan'] ?>"
                                        class="btn btn-primary mt-3">Lihat Hasil</a>
                                    <?php } else { ?>
                                    <a href="<?= base_url() ?>eors/daftar_sekarang/<?= $data['nama_kegiatan'] ?>"
                                        class="btn btn-primary mt-3">Daftar
                                        Sekarang</a>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } else { ?>
                    <div class="col-lg-12 row justify-content-center">
                        <div class="col-img-waiting text-center">
                            <img src="<?= base_url() ?>assets/img/maskot/waiting.jpg" width="450px"
                                class="img-responsive lazyload"
                                data-src="<?= base_url() ?>assets/img/maskot/waiting.jpg" alt="">
                            <h3 class="text-gray font-italic">Lah, kok gak ada :(</h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- ***** Kepanitiaan Area End ***** -->

        <!-- ***** Pertanyaan umum Area Start ***** -->
        <section class="section faq-area ptb_100 bg-gray" id="pertanyaan">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Pertanyaan umum seputar E-ORS</h2>
                            <p class=" mt-4">Berikut beberapa pertanyaan yang sering diajukan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- sApp Accordion -->
                            <div class="accordion" id="sApp-accordion">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8">
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne">
                                                        Bagaimana cara mendaftar dalam kegiatan?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    Silahkan perhatikan pada bagian Kepanitiaan Yang Bisa Diikuti untuk
                                                    mengetahui informasi terkait waktu pendaftaran dan lain lain.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo">
                                                        Terdapat informasi bahwa
                                                        nim sudah digunakan, apa yang harus saya lakukan?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    Jika anda memang tidak merasa pernah mendaftar pada suatu kegiatan,
                                                    silahkan hubungi administrator untuk men set ulang nim anda.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree">
                                                        Kuota pendaftaran telah terpenuhi, apa yang harus saya lakukan?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    Kuota pendaftaran yang telah terpenuhi menandakan bahwa kapasitas
                                                    kepanitiaan yang diterima pada suatu kegiatan sudah penuh, jumlah
                                                    kuota yang diterima tidak menandakan bahwa semuanya akan diterima.
                                                    Anda dapat menghubungi administrator untuk men set kuota pendaftaran
                                                    selama waktu open recruitment masih berlangsung
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour">
                                                        Saya bingung terkait dengan peletakan dokumen yang diminta
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    Untuk dokumen persyaratan, jika diminta harap menggunakan format
                                                    *.pdf dan berisi semua file dokumen persyaratan yang diminta kecuali
                                                    foto pendaftar. Contoh, file yang diminta adalah KRS dan KHS,
                                                    silahkan kedua file tersebut dijadikan 1 file berformat *.pdf.
                                                    Sehingga yang dikumpul nantinya hanya 1 file saja..
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-gray border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-3" type="button"
                                                        data-toggle="collapse" data-target="#collapseFive">
                                                        Saya menemukan masalah lain terkait website, kemana saya harus
                                                        melapor?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3 bg-gray">
                                                    Jika anda menemukan masalah pada pendaftaran kegiatan, pada
                                                    masing-masing kegiatan sudah diberikan kontak yang dapat dihubungi,
                                                    atau jika anda masih bingung, anda dapat menghubungi akun Instagram
                                                    <span class="text-primary"> @hmj_ti.undiksha</span>
                                                    untuk informasi lebih lengkap
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Pertanyaan umum Area End ***** -->

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->
        <!--====== Footer Area Start ======-->
        <footer class="footer-area footer-fixed">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <div class="navbar-brand">
                                    <img class="logo lazyload" data-src="<?= base_url() ?>assets/img/logo/UNDIKSHA.png"
                                        src="<?= base_url() ?>assets/img/logo/UNDIKSHA.png" alt="Logo HMJ TI"
                                        style="height: 4.8rem;" />
                                    <img class="logo lazyload" data-src="<?= base_url() ?>assets/img/logo/HMJ.png"
                                        src="<?= base_url() ?>assets/img/logo/HMJ.png" alt="Logo HMJ TI"
                                        style="height: 4.8rem;" />
                                </div>
                                <p class="mt-2 mb-3">
                                    Jl. Udayana No.11, Banjar Tegal, Singaraja, Kabupaten Buleleng, Bali
                                </p>
                                <!-- Social Icons -->
                                <div class="social-icons d-flex">
                                    <a class="facebook" href="https://web.facebook.com/hmj.ti.undiksha/?_rdc=1&_rdr"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="twitter" href="https://www.instagram.com/hmj_ti.undiksha/"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="google-plus"
                                        href="https://www.youtube.com/channel/UCjvKksTEifUWNU_rfCHubDg?app=desktop"
                                        target="_blank">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a class="vine" href="mailto:hmjtiundiksha@gmail.com" target="_blank">
                                        <i class="far fa-envelope"></i>
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Akses Cepat</h3>
                                <ul>
                                    <li class="py-2"><a href="<?= base_url() ?>web/home">Web HMJ</a></li>
                                    <li class="py-2"><a href="<?= base_url() ?>integer/home">Web Integer</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Konten</h3>
                                <ul>
                                    <li class="py-2"><a class="scroll" href="#features">Tujuan E-Ors</a></li>
                                    <li class="py-2"><a class="scroll" href="#blog">Kepanitiaan</a></li>
                                    <li class="py-2"><a class="scroll" href="#pertanyaan">Pertanyaan Umum</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Layanan</h3>
                                <ul>
                                    <li class="py-2"><a href="<?= base_url() ?>">Landing Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div
                                class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">
                                    &copy; Copyrights <?= date("Y"); ?> HMJ TI Undiksha. All rights reserved.
                                </div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">
                                    Made with <i class="fas fa-heart"></i> By
                                    <a href="#" class="text-primary" data-toggle="modal"
                                        data-target="#devModal">Ganatech</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Developer Area Start ======-->
        <div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="devModalLabel">Team Developer</h4>
                    </div>
                    <div class="modal-body">
                        <h5>Coordinator</h5>
                        <p>Irfan Walhidayah</p>
                        <p>Putu Zasya Eka Satya Nugraha</p>
                        <hr>
                        <h5>Front End</h5>
                        <p>Komang Jepri Kusuma Jaya</p>
                        <p>I Nyoman Triarta</p>
                        <p>Komang Pramayasa</p>
                        <p>Ketut Kerta Hendrawan</p>
                        <hr>
                        <h5>Back End</h5>
                        <p>I Gede Riyan Ardi Darmawan</p>
                        <p>Ida Bagus Made Yudha Wirawan</p>
                        <hr>
                        <h5>Assets and Contents</h5>
                        <p>I Wayan Darmika</p>
                        <p>I Gede Anggie Suardika Arpin</p>
                        <p>Ni Made Mirah Pradnya Pramesti</p>
                        <p>Ketut Nova Wirya Dinata</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Developer Area End ======-->
    </div>