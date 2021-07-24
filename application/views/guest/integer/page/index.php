<!-- ***** Intro Video Area Start ***** -->
<section id="intro">
    <div id="intro-video" class="row justify-content-center">
        <video autoplay disablePictureInPicture muted loop>
            <source class="lazyload"
                src="<?= base_url() ?>assets/upload/Folder_integer_website/video/<?= $kegiatan[0]['video_integer'] ?>"
                data-src="<?= base_url() ?>assets/upload/Folder_integer_website/video/<?= $kegiatan[0]['video_integer'] ?>"
                type="video/mp4">
        </video>
    </div>
    <div id="content">
        <div class="intro-text text-center">
            <h1 id="getAnimate" data-first="HMJ TI UNDIKSHA" data-sec="PROUDLY PRESENT">
            </h1>
            <div id="titleInteger" class="d-none">
                <img class="lazyload"
                    src="<?= base_url() ?>assets/upload/Folder_integer_website/foto/<?= $kegiatan[0]['logo_integer'] ?>"
                    data-src="<?= base_url() ?>assets/upload/Folder_integer_website/foto/<?= $kegiatan[0]['logo_integer'] ?>">
                <!-- <h1><?= strtoupper($kegiatan[0]['nama_integer']) ?></h1> -->
            </div>


        </div>
    </div>
</section>
<!-- *****  Intro Video Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-inherit h-100vh overflow-hidden">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7">
                <div class="welcome-intro">
                    <h1>
                        <?= ucwords($kegiatan[0]['tema_integer']) ?>
                    </h1>
                    <p class="my-4"><?= $kegiatan[0]['deskripsi_integer'] ?></p>
                </div>
            </div>
            <div class="col-12 col-md-5 d-none d-lg-block">
                <!-- Welcome Thumb -->
                <div class=" welcome-thumb" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                    <img class="lazyload" src="<?= base_url() ?>assets/img/maskot/welcome.png"
                        data-src="<?= base_url() ?>assets/img/maskot/welcome.png" style="max-width: unset;"
                        alt="Maskot">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Area Start ***** -->
<section id="features" class="section features-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Tujuan <?= strtoupper($kegiatan[0]['nama_integer']) ?></h2>
                </div>
            </div>
        </div>
        <div class="row mb-lg-4 mb-md-3 mb-sm-2 justify-content-center">
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <i class="fas fa-school" style="font-size: 3.5rem;"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Perayaan HUT</h3>
                        <p>Untuk memperingati
                            hari ulang tahun
                            Jurusan TI yang ke-
                            2.</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <i class="fas fa-globe" style="font-size: 3.5rem;"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Perkenalan
                            Jurusan</h3>
                        <p>Memperkenalkan
                            Jurusan TI kepada
                            masyarakat luar.</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <i class="fas fa-robot" style="font-size: 3.5rem"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Publikasi Karya</h3>
                        <p>Menunjukkan hasil
                            karya Mahasiswa TI
                            melalui kegiatan
                            expo.</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-6 col-lg-3">
                <!-- Icon Box -->
                <div class="icon-box text-center p-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <!-- Featured Icon -->
                    <div class="featured-icon mb-3">
                        <i class="fas fa-icons" style="font-size: 3.5rem"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Media Kreativitas</h3>
                        <p>Sebagai media
                            penyalur kreativitas
                            dan ide-ide
                            Mahasiswa TI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Features Area End ***** -->

<section class="section discover-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Kategori Perlombaan <?= strtoupper($kegiatan[0]['nama_integer']) ?></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
$i = 1;
foreach ($kategori as $data) {
    $i++;
    if ($i % 2 == 0) {
?>
<!-- ***** Seni Area Start ***** -->
<section class="section discover-area bg-gray overflow-hidden ptb_100" id="<?= $i ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 order-1 order-lg-1">
                <!-- Discover Thumb -->
                <div class="service-thumb discover-thumb mx-auto text-center wow fadeInLeft">
                    <img class="lazyload"
                        src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer'] ?>"
                        data-src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer'] ?>"
                        alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-2">
                <!-- Discover Text -->
                <div class="discover-text px-0 px-lg-4 pt-4 pt-lg-0">
                    <h2 class="pb-4"><?= ucwords($data['nama_kategori_lomba_integer']) ?></h2>
                    <!-- Check List -->
                    <p class="mb-3 text-justify">
                        <?= $data['deskripsi_kategori_lomba_integer'] ?>
                    </p>
                    <ul class="check-list">
                        <?php foreach ($lomba as $lomba_data) {
                                    if ($lomba_data['id_kategori_lomba_integer'] == $data['id_kategori_lomba_integer']) {
                                ?>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2"><?= $lomba_data['nama_lomba_integer'] ?></span>
                            </div>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <a href="<?= base_url() ?>integer/lomba_integer/<?= $data['id_kategori_lomba_integer'] ?>"
                        class="btn btn-bordered mt-4">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Seni Area End ***** -->
<?php } else { ?>
<!-- ***** Karya Tulis Area Start ***** -->
<section class="section discover-area overflow-hidden ptb_100" id="<?= $i ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <!-- Discover Thumb -->
                <div class="service-thumb discover-thumb mx-auto text-center wow fadeInRight">
                    <img class="lazyload"
                        src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer'] ?>"
                        data-src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_kategori/<?= $data['icon_kategori_lomba_integer'] ?>"
                        alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <!-- Discover Text -->
                <div class="discover-text px-0 px-lg-4 pt-4 pt-lg-0">
                    <h2 class="pb-4"><?= ucwords($data['nama_kategori_lomba_integer']) ?></h2>
                    <!-- Check List -->
                    <p class="mb-3">
                        <?= $data['deskripsi_kategori_lomba_integer'] ?>
                    </p>
                    <ul class="check-list">
                        <?php foreach ($lomba as $lomba_data) {
                                    if ($lomba_data['id_kategori_lomba_integer'] == $data['id_kategori_lomba_integer']) {
                                ?>
                        <li class="py-1">
                            <!-- List Box -->
                            <div class="list-box media">
                                <span class="icon align-self-center"><i class="fas fa-check"></i></span>
                                <span class="media-body pl-2"><?= $lomba_data['nama_lomba_integer'] ?></span>
                            </div>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <a href="<?= base_url() ?>integer/lomba_integer/<?= $data['id_kategori_lomba_integer'] ?>"
                        class="btn btn-bordered mt-4">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }
} ?>


<!-- ***** IT Area End ***** -->

<!-- ***** Partisipasi Start ***** -->
<section class="section work-area bg-overlay overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <!-- Work Content -->
                <div class="work-content text-center">
                    <h2 class="text-white">Partisipasi Sekarang!</h2>
                    <p class="text-white my-3 mt-sm-4 mb-sm-5">Ayo berpartisipasi dalam kegiatan lomba serangkaian
                        <?= strtoupper($kegiatan[0]['nama_integer']) ?> yang dipersembahkan oleh HMJ Teknik
                        Informatika
                        Undiksha.</p>
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
                    <h3 class="text-white py-3">Registrasi</h3>
                    <p class="text-white">Pilihlah lomba yang akan diikuti</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md lazyload" src="<?= base_url() ?>assets/img/icon/work/competence.png"
                            data-src="<?= base_url() ?>assets/img/icon/work/competence.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Bertanding</h3>
                    <p class="text-white">Ikuti perlombaan dan berjuang sekuat tenaga</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <!-- Single Work -->
                <div class="single-work text-center p-3">
                    <!-- Work Icon -->
                    <div class="work-icon">
                        <img class="avatar-md lazyload" src="<?= base_url() ?>assets/img/icon/work/winning.png"
                            data-src="<?= base_url() ?>assets/img/icon/work/winning.png" alt="">
                    </div>
                    <h3 class="text-white py-3">Juara</h3>
                    <p class="text-white">Raihlah juara dan buktikan siapa dirimu</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Partisipasi Area End ***** -->
<section id="information" class="section price-plan-area bg-gray overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Kabar Seputar <?= strtoupper($kegiatan[0]['nama_integer']) ?> </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="row price-plan-wrapper">
                    <div class="col-12 col-md-6 mb-3">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan text-center p-4 wow fadeInLeft" data-aos-duration="2s"
                            data-wow-delay="0.4s">
                            <!-- Plan Thumb -->
                            <div class="plan-thumb text-primary">
                                <i class="fas fa-bullhorn" style="font-size: 4rem;"></i>
                            </div>
                            <!-- Plan Title -->
                            <div class="plan-title my-2 my-sm-3">
                                <h3 class="text-uppercase">Pengumuman</h3>
                            </div>
                            <!-- Plan Description -->
                            <div class="plan-description text-left overflow-auto" style="height: 15rem;">
                                <ul class="plan-features">
                                    <li class="border-bottom"></li>
                                    <?php foreach ($berita as $data_pengumuman) {
                                        if ($data_pengumuman['kategori_berita_integer'] == 2) {
                                    ?>
                                    <li class="border-bottom py-3">
                                        <a
                                            href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data_pengumuman['id_berita_integer'] ?>">
                                            <?= $data_pengumuman['nama_berita_integer'] ?>
                                        </a>
                                    </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                            <!-- Plan Button -->
                            <div class="button">
                                <a href="<?= base_url() ?>integer/kabar_integer" class="btn mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan text-center p-4 wow fadeInRight" data-aos-duration="2s"
                            data-wow-delay="0.4s">
                            <!-- Plan Thumb -->
                            <div class="plan-thumb text-primary">
                                <i class="far fa-newspaper" style="font-size: 4rem;"></i>
                            </div>
                            <!-- Plan Title -->
                            <div class="plan-title my-2 my-sm-3">
                                <h3 class="text-uppercase">Berita</h3>
                            </div>
                            <!-- Plan Description -->
                            <div class="plan-description text-left overflow-auto" style="height: 15rem;">
                                <ul class="plan-features">
                                    <li class="border-bottom"></li>
                                    <?php foreach ($pengumuman as $data_berita) {
                                        if ($data_berita['kategori_berita_integer'] == 1) {
                                    ?>
                                    <li class="border-bottom py-3">
                                        <a
                                            href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data_berita['id_berita_integer'] ?>">
                                            <?= $data_berita['nama_berita_integer'] ?>
                                        </a>
                                    </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                            <!-- Plan Button -->
                            <div class="button">
                                <a href="<?= base_url() ?>integer/kabar_integer" class="btn mt-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- *****  Sponsor Area Start ***** -->
<section class="branding-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="mb-5">Sponsor dan Media Partner</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Branding Slider -->
            <div class="branding-slider owl-carousel op-5">
                <!-- Single Brand -->
                <?php foreach ($sponsor as $data) { ?>
                <div class="single-brand p-3 d-flex justify-content-center align-items-center">
                    <img class="lazyload"
                        src="<?= base_url() ?>assets/upload/Folder_integer_website/sponsor/<?= $data['foto_sponsor_integer'] ?>"
                        data-src="<?= base_url() ?>assets/upload/Folder_integer_website/sponsor/<?= $data['foto_sponsor_integer'] ?>"
                        style="height: 5rem;" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- ***** Sponsor Area End ***** -->

<!-- ***** Pertanyaan umum Area Start ***** -->
<section class="section faq-area ptb_100 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Frequently Asked Question (FAQs)
                        <?= strtoupper($kegiatan[0]['nama_integer']) ?>
                    </h2>
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
                                                data-target="#card_satu">
                                                Bagaimana tahap pendaftaran INTEGER #2?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_satu" class="collapse show" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Pendaftaran dilakukan melalui satu tahap, ketua tim/pendaftar wajib
                                            mendaftarkan timnya melalui website resmi kegiatan INTEGER #2 dengan
                                            menyertakan bukti pembayaran (bagi lomba yang berbayar), bukti upload
                                            twibbon peserta, Surat Keterangan Orisinalitas Karya (bagi lomba yang
                                            berbasis karya), dan beberapa persyaratan yang telah diatur pada
                                            masing-masing lomba.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <!-- Card Header -->
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_dua">
                                                Dimana saja harus mengupload Twibbon?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_dua" class="collapse" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Twibbon dapat diupload pada media sosial masing-masing peserta beserta
                                            dengan caption yang sudah ditentukan oleh masing-masing lomba, seluruh
                                            peserta wajib mengupload Twibbon tanpa terkecuali. Bukti bahwa peserta telah
                                            mengupload Twibbon wajib disertakan pada saat pendaftaran lomba.
                                        </div>
                                    </div>
                                </div>


                                <!-- Single Accordion Item -->
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <!-- Card Header -->
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_tiga">
                                                Bagaimana alur Pendaftaran Tim dan kapan Tim Peserta dianggap sudah
                                                terverifikasi?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_tiga" class="collapse" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Setelah melakukan pendaftaran, panitia akan melakukan verifikasi. Proses ini
                                            cukup memakan waktu, sehingga dimohon kepada pendaftar untuk bersabar.
                                            Setelah divalidasi oleh panitia, sistem melalui alamat email
                                            hmjtiundisha@gmail.com akan mengirimkan email ke ketua tim terdaftar dengan
                                            menyertakan tautan link grup pendaftar. Tautan ini akan membawa pendaftar ke
                                            grup media social masing-masing lomba, dengan demikian tim/peserta telah
                                            terverifikasi.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_empat">
                                                Bagaimana jika Tim Peserta mengumpulkan lebih dari satu karya yang sama?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_empat" class="collapse" data-parent="#sApp-accordion">
                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Bagi lomba yang membutuhkan pengumpulan karya pada saat pendaftaran (LIDP,
                                            UI/UX Design, Essay Nasional, Business IT Case, Desain Poster, Music Cover,
                                            serta Tiktok) pengumpulan karya hanya dapat dilakukan sekali untuk tiap-tiap
                                            tim. Jika ditemukan tim yang mengumpulkan karya lebih dari 1 kali, maka
                                            karya yang akan dinilai oleh dewan juri adalah karya yang paling pertama
                                            dikirimkan oleh tim tersebut.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_lima">
                                                Apakah yang dimaksud lomba berbasis karya dan lomba berbasis
                                                pertandingan?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_lima" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Lomba berbasis karya adalah lomba yang membutuhkan pengumpulan karya pada
                                            saat pendaftarannya, adapun lomba yang termasuk kedalamnya adalah lomba
                                            LIDP, UI/UX Design, Essay Nasional, Business IT Case, Desain Poster, Music
                                            Cover, serta Tiktok. Sementara lomba berbasis pertandingan adalah lomba yang
                                            tidak perlu mengumpulkan karya pada saat pendaftaran, namun kegiatannya
                                            dilaksanakan dalam format pertandingan, adapun lomba yang termasuk
                                            kedalamnya adalah lomba Hacking The Game, Coding Competition, dan Mobile
                                            Legend.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_enam">
                                                Kemanakah saya harus melakukan pembayaran?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_enam" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Pembayaran dapat dilakukan pada rekening yang telah disediakan
                                            dimasing-masing lomba, harap untuk menyimpan bukti pembayaran yang telah
                                            dilakukan. Bukti pembayaran selanjutnya akan disertakan pada saat melakukan
                                            pendaftaran lomba. Setelah anda melakukan pendaftaran, anda akan menerima
                                            email konfirmasi verifikasi Tim Peserta ke alamat email ketua tim yang
                                            digunakan pada saat pendaftaran maksimal 2 x 24 Jam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_tujuh">
                                                Apa sanksi yang didapat jika terindikasi melakukan penipuan/memodifikasi
                                                bukti pembayaran?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_tujuh" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Setelah Tim Peserta melakukan pendaftaran, selanjutnya panitia akan
                                            melakukan verifikasi terhadap bukti pembayaran lomba yang dikirimkan oleh
                                            masing-masing Tim Peserta. Jika ditemukan dokumen bukti pembayaran yang
                                            terindikasi melakukan penipuan/memodifikasi, maka Tim Peserta tersebut
                                            dianggap gugur/tereliminasi.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_delapan">
                                                Bagaimana cara mengupdate data tim?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_delapan" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Data tim saat registrasi pertama kali TIDAK DAPAT diubah, sehingga
                                            diusahakan tidak ada kesalahan dalam mengisi form yang ada. Tidak
                                            diperkenankan melakukan pengiriman karya/ pendaftaran lebih dari sekali
                                            untuk setiap TIM.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_sembilan">
                                                Bagaimana bila tidak ada KTM (Kartu Tanda Mahasiswa) dan Kartu Pelajar?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_sembilan" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Bisa digantikan dengan Surat Keterangan Siswa/Mahasiswa Aktif
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_sepuluh">
                                                Apakah boleh seseorang terdaftar lebih dari satu kali pada tim dalam
                                                lomba yang sama pada kategori lomba berbasis karya?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_sepuluh" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Boleh, satu peserta boleh mendaftar maksimal dua kali dalam satu lomba
                                            kategori berbasis karya, dengan rincian SATU kali menjadi KETUA tim dan SATU
                                            kali menjadi ANGGOTA. Apabila seseorang terdaftar pada dua tim (atau lebih)
                                            dalam lomba yang sama masuk ke babak final, kemudian jadwal lomba kedua
                                            timnya bersamaan, panitia tidak bertanggung jawab untuk pengubahan
                                            penjadwalan lomba
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_tigabelas">
                                                Apakah boleh seseorang terdaftar lebih dari satu kali pada tim dalam
                                                lomba yang sama pada kategori lomba berbasis pertandingan?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_tigabelas" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Tidak boleh, pada lomba berbasis pertandingan satu peserta hanya boleh
                                            terdaftar pada satu tim.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_empatbelas">
                                                Apakah boleh seseorang terdaftar lebih dari satu kali pada tim dalam
                                                lomba yang berbeda pada kategori lomba berbasis karya?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_empatbelas" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Boleh, satu peserta boleh mendaftar lebih dari 1 jenis lomba dengan rincian
                                            SATU kali menjadi KETUA tim. Jika ingin mendaftar pada lomba lain di
                                            kategori ini, peserta tersebut hanya bisa menjadi ANGGOTA. Apabila seseorang
                                            yang terdaftar pada dua tim (atau lebih) dalam lomba yang berbeda masuk
                                            kebabak final, kemudian jadwal lomba kedua timnya bersamaan, panitia tidak
                                            bertanggung jawab untuk pengubahan penjadwalan lomba.
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">

                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_sebelas">
                                                Dimanakah saya bisa mengunduh buku panduan, twibbon, dan berkas lainnya?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_sebelas" class="collapse" data-parent="#sApp-accordion">

                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Untuk mengunduh berkas, silahkan akses kehalaman Lomba pada bagian atas
                                            terdapat notifikasi yang mengarahkan anda ketombol Downloads
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Accordion Item -->
                                <div class="card border-top-0 border-left-0 border-right-0 border-bottom">
                                    <!-- Card Header -->
                                    <div class="card-header bg-gray border-0 p-0">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed px-0 py-3" type="button" data-toggle="collapse"
                                                data-target="#card_duabelas">
                                                Saya menemukan masalah pada website, kemana saya harus melapor?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="card_duabelas" class="collapse" data-parent="#sApp-accordion">
                                        <!-- Card Body -->
                                        <div class="card-body px-0 py-3 bg-gray text-justify">
                                            Untuk melaporkan masalah pada website, silahkan hubungi akun instagram
                                            HMJ
                                            TI Undiksha <span class="text-primary">@integer.hmjtiundiksha</span> atau
                                            dapat
                                            menghubungi administrator website melalui No Wa berikut <a
                                                href="https://api.whatsapp.com/send?phone=<?=nomor_admin?>&text=Terdapat%20masalah%20pada%20website%20INTEGER,%20mhon%20bantuannya%20untuk%20memperbaiki"><span
                                                    class="text-primary">+<?=nomor_admin?></span></a>
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