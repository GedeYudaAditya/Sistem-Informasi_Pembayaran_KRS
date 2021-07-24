<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-lg-7">
                <div class="welcome-intro">
                    <h1 class="text-white">Electronic Voting System HMJ TI Undiksha</h1>
                    <p class="text-white my-4 text-justify">ETIKA merupakan sebuah sistem berbasis website yang
                        digunakan untuk membantu dalam pelaksanaan E-Voting dilingkungan HMJ TI Undiksha. ETIKA
                        dapat digunakan sebagai pengganti pemira konvensional menjadi pemira yang lebih modern
                        dengan memanfaatkan Teknologi dengan tetap mengutamakan asas Langsung, Umum, Bebas,
                        Rahasia, Jujur dan Adil</p>
                    <!-- Store Buttons -->
                    <div class="button-group store-buttons d-flex">
                        <a href="<?= base_url() ?>#pricing" class="btn scroll sApp-btn text-uppercase">Lihat
                            Jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
                <!-- Contact Box -->
                <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="<?= base_url() ?>etika/cek_hak_pilih">
                        <div class="contact-top">
                            <h3 class="contact-title">Cek Hak Pilih</h3>
                            <h5 class="text-secondary fw-3 py-3">Silahkan masukkan informasi berikut untuk
                                memastikan Anda memiliki hak pilih pada kegiatan EVOTING yang berlangsung</h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" onkeyup="checkProdi()">
                                    <input type="text" id="nim" pattern="[0-9]*" minlength="10" maxlength="10"
                                        class="form-control" name="nim" placeholder="Nim Mahasiswa" required="required">
                                </div>
                                <div class="form-group">
                                    <select name="prodi" id="prodi" class="form-control" required>
                                        <option value="">Prodi Mahasiswa</option>
                                        <option value="05">Pendidikan Teknik Informatika</option>
                                        <option value="02">Manajemen Informatika</option>
                                        <option value="09">Sistem Informasi</option>
                                        <option value="10">Ilmu Komputer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bordered w-100 mt-3 mt-sm-4" name="submit" value="Submit"
                                    type="submit">Cari
                                    Saya</button>
                                <div class="contact-bottom">
                                    <span class="d-inline-block mt-3">Jika Hak Pilih Anda belum terdata,
                                        silahkan hubungi <a
                                            href="https://api.whatsapp.com/send?phone=<?= nomor_admin ?>&text=Hak%20pilih%20saya%20belum%20terdaftar">Admin
                                            Website</a> atau dapat melalui <a href="<?= base_url() ?>#contact"
                                            class="scroll">Email Kami</a></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" fill="#FFFFFF"
                d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z">
            </path>
        </svg>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Area Start ***** -->
<section id="features" class="section features-area style-two overflow-hidden ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Go</span>
                        Technology
                    </span>
                    <h2>Keunggulan ETIKA</h2>
                    <p class="d-none d-sm-block mt-4">Sejak awal pengembangan, kami berkomitmen untuk
                        mengembangkan suatu Sistem Informasi yang mampu mendukung proses pemilihan dengan
                        memiliki keunggulan, yakni</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s"
                    data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload" src="<?= base_url() ?>assets/img/icon/featured-img/speak.png"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/speak.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Mudah Diakses</h3>
                        <p>Tanpa perlu mengunduh, Sistem ETIKA dapat diakses melalui browser pengguna</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.2s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload" src="<?= base_url() ?>assets/img/icon/featured-img/support.png"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/support.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Mudah Digunakan</h3>
                        <p>Cukup login dengan Username dan Token, Anda dapat memulai melakukan
                            pemilihan</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s"
                    data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/lock.png"
                            src="<?= base_url() ?>assets/img/icon/featured-img/lock.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Aman dan Nyaman</h3>
                        <p>Hanya Anda yang mengetahui pilihan Anda, tidak ada yang lain diantaranya bahkan
                            panitia</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s"
                    data-wow-delay="0.8s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/code.png"
                            src="<?= base_url() ?>assets/img/icon/featured-img/code.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Terintegrasi Teknologi</h3>
                        <p>Proses penginputan kandidat, pemilih, dan perhitungan suara dilakukan oleh sistem</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/library.png"
                            src="<?= base_url() ?>assets/img/icon/featured-img/library.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">LUBERJUDIL</h3>
                        <p>Meskipun menggunakan Teknologi, sistem ETIKA tetap mengutamakan asas LUBERJUDIL</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s"
                    data-wow-delay="0.8s">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm lazyload"
                            data-src="<?= base_url() ?>assets/img/icon/featured-img/seo-and-web.png"
                            src="<?= base_url() ?>assets/img/icon/featured-img/seo-and-web.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Multi Kegiatan</h3>
                        <p>Sistem ETIKA mendukung banyak kegiatan evoting secara bersamaan, sangat mudah kan?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Area End ***** -->

<!-- ***** Discover Area Start ***** -->
<section class="section discover-area bg-gray overflow-hidden ptb_100" id="ketentuan">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <!-- Discover Thumb -->
                <div class="service-thumb discover-thumb mx-auto pt-5 pt-lg-0">
                    <img src="<?= base_url() ?>assets/img/maskot/welcome.png" class="lazyload" id="welcome_gambar"
                        data-src="<?= base_url() ?>assets/img/maskot/welcome.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <!-- Discover Text -->
                <div class="discover-text pt-4 pt-lg-0">
                    <h2 class="pb-4 pb-sm-0">Ketentuan dan Syarat Melakukan EVOTING</h2>
                    <span class="d-none d-sm-block pt-3 pb-4 text-justify">Agar Anda terdata pada sistem dan
                        dapat
                        melakukan EVOTING, ada beberapa ketentuan yang perlu diperhatikan</span>
                    <!-- Check List -->
                    <ul class="check-list text-justify">
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <p>Terdata sebagai Mahasiswa Aktif di SIAK Undiksha
                                        yang ditandai dengan penyusunan KRS Pada Semester Berlangsungnya
                                        kegiatan
                                        EVOTING</p>
                                </span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <?php
                                    if (date('m') >= 1 && date('m') <= 6) {
                                        $semester = "2, 4, 6, 8";
                                    } else {
                                        $semester = "1, 3, 5, 7";
                                    }

                                    ?>
                                    <p>Mahasiswa Aktif Semester <?= $semester ?> Wajib Melakukan
                                        EVOTING, Sedangkan Mahasiswa Aktif Semester Diatasnya, dapat melakukan
                                        pengusulan Hak Pilih untuk mendapatkan Hak Suaranya</p>
                                </span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <p>Menggunakan Hak Pilih dengan sebagaimana mestinya,
                                        tidak melakukan kecurangan, atau tindakan yang tidak mencerminkan asas
                                        LUBERJUDIL</p>
                                </span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <p>Menjaga selalu Username dan Token Hak Pilih yang
                                        diberikan pada kegiatan EVOTING</p>
                                </span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">

                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <p>Jika Hak Pilih Anda belum terdata, Anda dapat
                                        mengusulkan Hak Pilih dengan cara menghubungi Admin Website atau melalui
                                        Email HMJ TI Undiksha</p>
                                </span>

                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <p>Setiap Token Memiliki Durasi Token, Mohon Gunakan
                                        Hak Pilih Anda Sebelum Durasi Penggunaan Token Habis.</p>
                                </span>
                            </div>
                        </li>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-3">
                                    <p>Terdapat 3 mode evoting yaitu Otomatis, Semi Otomatis, dan Manual. Metode Evoting
                                        yang digunakan akan diinformasikan oleh Panitia </p>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <div class="icon-box d-flex mt-3">
                        <div class="service-icon">
                            <a
                                href="https://api.whatsapp.com/send?phone=<?= nomor_admin ?>&text=Hak%20pilih%20saya%20belum%20terdaftar">
                                <span><i class="fab fa-whatsapp"></i></span>
                            </a>
                        </div>
                        <div class="service-icon px-3">
                            <a href="mailto:hmjtiundiksha@gmail.com">
                                <span><i class="fas fa-envelope"></i></span>
                            </a>
                        </div>
                        <div class="service-icon">
                            <a href="https://www.instagram.com/hmj_ti.undiksha/">
                                <span><i class="fab fa-instagram"></i></span>
                            </a>
                        </div>
                        <div class="service-icon px-3">
                            <a href="https://www.facebook.com/hmj.ti.undiksha/?_rdc=2&_rdr">
                                <span><i class="fab fa-facebook"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Discover Area End ***** -->

<!-- ***** Work Area Start ***** -->
<section class="section work-area bg-overlay overflow-hidden ptb_100" id="alur">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Work Content -->
                <div class="work-content text-center">
                    <h2 class="text-white">Alur Kegiatan EVOTING</h2>
                    <p class="d-none d-sm-block text-white my-3 mt-sm-4 mb-sm-5">Berikut Alur kegiatan EVOTING
                        yang dapat diperhatikan</p>
                    <p class="d-block d-sm-none text-white my-3">Berikut Alur kegiatan EVOTING yang dapat
                        diperhatikan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md lazyload" src="<?= base_url() ?>assets/img/icon/work/register.png"
                            data-src="<?= base_url() ?>assets/img/icon/work/register.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Cek Hak Pilih</h3>
                    <p class="text-white">Cek Hak Pilih Anda melalui sistem ETIKA, jika belum terdaftar, hubungi
                        Operator. Operator akan melakukan pengecekan terhadap data anda </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md lazyload" src="<?= base_url() ?>assets/img/icon/work/choose.png"
                            data-src="<?= base_url() ?>assets/img/icon/work/choose.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Pilih Kegiatan PEMIRA</h3>
                    <p class="text-white">Pilih Kegiatan PEMIRA sesuai dengan dikegiatan apa Anda telah
                        terdaftar. Untuk mengetahui dikegiatan apa anda terdaftar, lakukan pengecekan Hak Pilih
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md lazyload" src="<?= base_url() ?>assets/img/icon/work/archive.png"
                            data-src="<?= base_url() ?>assets/img/icon/work/archive.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Gunakan Hak Pilih</h3>
                    <p class="text-white">Lakukan Login dengan Username dan Token yang didapatkan. Jika Anda
                        tidak memiliki, silahkan lakukan Generate Token atau Hubungi Panitia</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Work Area End ***** -->


<!-- ***** Price Plan Area Start ***** -->
<section id="pricing" class="section price-plan-area bg-gray overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Jadwal Kegiatan</h2>
                    <p class="d-none d-sm-block mt-4">Berikut merupakan beberapa jadwal kegiatan PEMIRA yang
                        tersedia, silahkan cek terlebih dahulu Hak Pilih Anda untuk mengetahui kegiatan yang
                        dapat Anda Ikuti
                    </p>
                    <p class="d-block d-sm-none mt-4">Berikut merupakan beberapa jadwal kegiatan PEMIRA yang
                        tersedia, silahkan cek terlebih dahulu Hak Pilih Anda untuk mengetahui kegiatan yang
                        dapat Anda Ikuti</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="row price-plan-wrapper">
                    <?php if (!empty($kegiatan)) : ?>
                    <?php foreach ($kegiatan as $data) : ?>
                    <div class="col-12 col-md-6 mt-5">

                        <!-- Single Price Plan -->
                        <div class="single-price-plan text-center p-5 wow fadeInLeft" data-aos-duration="2s"
                            data-wow-delay="0.4s">
                            <div class="featured-img text-center mb-3">
                                <img class="avatar-sm lazyload"
                                    data-src="<?= base_url() ?>assets/img/icon/featured-img/support.png"
                                    src="<?= base_url() ?>assets/img/icon/featured-img/support.png" alt="">
                            </div>
                            <!-- Plan Thumb -->
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
                            <!-- Plan Title -->
                            <div class="plan-title my-2 my-sm-3">
                                <h4 class="text-uppercase"><?= $data['nama_kegiatan'] ?></h4>
                            </div>
                            <!-- Plan Price -->
                            <!-- Plan Description -->
                            <div class="plan-description">
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
                                <div class="mt-3 text-justify"><?= $data['deskripsi'] ?></div>
                            </div>
                            <!-- Plan Button -->

                            <div class="plan-button">
                                <a href="<?= base_url() ?>etika/voting_kegiatan"><button class="btn mt-4 mb-5">Lihat
                                        Detail</button></a>
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
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <!-- FAQ Content -->
                <div class="faq-content">
                    <span class="d-block text-center mt-5">Masih Bingung? <br> Berikut Frequently Asked Question
                        (FAQs) Sistem ETIKA </span>
                    <!-- sApp Accordion -->
                    <div class="accordion pt-5" id="apolo-accordion">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <!-- Single Accordion Item -->
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseOne">
                                                Apakah Mahasiswa Non-Aktif Memiliki Hak Pilih?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Agar terdaftar menjadi pemilih pada kegiatan pemilihan yang
                                            dilaksanakan, Anda harus terdata sebagai mahasiswa aktif di SIAK
                                            Undiksha pada semester saat kegiatan pemilihan berlangsung.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo">
                                                Apa yang harus dilakukan jika hak pilih saya tidak <br>
                                                terdaftar di sistem?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Jika Anda yakin ini merupakan kesalahan dari panitia, Anda dapat
                                            menghubungi panitia dengan menyertakan data-data yang diminta untuk
                                            diinputkan ke sistem.
                                            Panitia akan melakukan pengecekan terhadap data Anda, jika data Anda
                                            memenuhi persyaratan Pemilihan, maka Anda dapat menggunakan Hak
                                            Pilih Anda
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseThree">
                                                Token Tidak Dapat Digunakan
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Jika Anda tidak dapat menggunakan Token Anda namun Anda belum
                                            melakukan pemilihan, Anda dapat menghubungi operator, operator akan
                                            melakukan Reset Terhadap token tersebut
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseFour">
                                                Apakah Semua Kegiatan Pemilihan dapat saya ikuti?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Tergantung kebijakan Panitia, mungkin saja ada pemilihan yang
                                            memiliki syarat khusus untuk menjadi pemilih, sehingga Anda tidak
                                            terdaftar didalamnya
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Single Accordion Item -->

                                <!-- Single Accordion Item -->
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseFive">
                                                Darimanakah panitia mendapatkan data pemilih?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Data pemilih sepenuhnya berasal dari UPT TIK, data yang digunakan
                                            pada pembuatan sistem akan sangat dijaga kerahasiaannya dan tidak
                                            akan digunakan untuk hal-hal diluar dari kegiatan yang berlangsung.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseSix">
                                                Apakah boleh saya tidak melakukan pemilihan?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Bagi pemilih yang telah terdaftar di sistem ETIKA, diwajibkan untuk
                                            melakukan pemilihan sesuai kegiatan yang berlangsung. Mari gunakan
                                            hak pilih Anda guna membangun Jurusan Teknik Informatika yang lebih
                                            baik lagi
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseSeven">
                                                Apakah perbedaan Mode Otomatis, Semi Otomatis, dan Manual?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSeven" class="collapse" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Yang membedakan dari ketiga mode tersebut hanyalah cara anda
                                            mendapatkan token dan username. Jika mode kegiatan evoting adalah
                                            Manual, itu menandakan token dan username pemilihan akan diberikan
                                            oleh panitia melalui pengumuman baik di Instagram, Grup Korti, dan
                                            Media Sosial Lainnya. Sementara itu jika mode kegiatan evoting adalah
                                            Otomatis, maka anda harus memverifikasi diri anda untuk mendapatkan token
                                            dan username yang akan dikirimkan melalui email yang sudah didapatkan dari
                                            UPT TIK. Dan jika mode kegiatan evoting adalah Semi Otomatis, maka anda
                                            harus memverifikasi diri anda serta memasukkan email Undiksha agar sistem
                                            dapat mengirimkan username dan token pemilihan.

                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed p-2" type="button" data-toggle="collapse"
                                                data-target="#collapseEight">
                                                Apakah penting mengetahui mode kegiatan?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseEight" class="collapse" data-parent="#apolo-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            Tentu saja penting, dengan mengetahui mode kegiatan maka Anda dapat
                                            mengetahui alur pemira yang akan dilaksanakan.
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
<!-- ***** Price Plan Area End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Hubungi Kami</h2>
                    <p class="d-none d-sm-block mt-4">Anda Dapat Menghubungi kami melalui email jika Anda
                        mengalami kendala pada saat menggunakan Elektronic Voting System HMJ TI Undiksha (ETIKA)
                    </p>
                    <p class="d-block d-sm-none mt-4">Anda Dapat Menghubungi kami melalui email jika Anda
                        mengalami kendala pada saat menggunakan Elektronic Voting System HMJ TI Undiksha (ETIKA)
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-md-5">
                <!-- Contact Us -->
                <div class="contact-us">
                    <img src="<?= base_url() ?>assets/img/maskot/megang-laptop.png" class="lazyload" id="megang_laptop"
                        data-src="<?= base_url() ?>assets/img/maskot/megang-laptop.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 pt-4 pt-md-0">
                <!-- Contact Box -->
                <div class="contact-box text-center">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <?php echo form_error('name'); ?>
                                    <input type="text" class="form-control" value="<?php echo set_value('name'); ?>"
                                        name=" name" placeholder="Nama Kamu" required="required">
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('email'); ?>
                                    <input type="email" class="form-control" value="<?php echo set_value('email'); ?>"
                                        name="email" placeholder="Email Kamu" required="required">
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('subject'); ?>
                                    <input type="text" class="form-control" value="<?php echo set_value('subject'); ?>"
                                        name="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <?php echo form_error('message'); ?>
                                    <textarea class="form-control" name="message" placeholder="Pesan"
                                        required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="send" value="Send" class="btn btn-lg btn-block mt-3"><span
                                        class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Kirim
                                    Email</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Contact Area End ======-->

<!--====== Height Emulator Area Start ======-->
<div class="height-emulator d-none d-lg-block"></div>
<!--====== Height Emulator Area End ======-->