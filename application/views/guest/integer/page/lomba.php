<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                    <h3 class="text-white">Cabang Lomba <?= strtoupper($kegiatan[0]['nama_integer']) ?></h3>
                    <form action="" method="POST">
                        <div class="input-group mb-2 mt-5 col-lg-12">
                            <input type="text" name="cari" class="form-control" placeholder="Masukan kata kunci"
                                id="search" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Lomba Area Start ***** -->
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="card mb-5">
            <div class="card-header">
                <h5 class="card-title">Informasi Kegiatan <?= strtoupper($kegiatan[0]['nama_integer']) ?></h5>
            </div>
            <div class="card-body">
                <p class="card-text text-justify mb-4">Selamat datang kami ucapkan kepada para calon pendaftar lomba
                    pada
                    serangkaian
                    kegiatan <?= strtoupper($kegiatan[0]['nama_integer']) ?> tahun <?= date('Y')         ?>. Sebelum
                    melakukan pendaftaran ada baiknya para calon pendaftar untuk membaca dan mengunduh informasi terkait
                    dengan lomba yang akan diikuti. Adapun informasi terkait dengan Buku Panduan Kegiatan
                    <?= strtoupper($kegiatan[0]['nama_integer']) ?>, Poster Lomba, serta informasi lainnya dapat diunduh
                    dengan mengklik tombol dibawah ini
                    ini</p>
                <a href="<?= base_url() ?>integer/download_file_informasi_integer/<?= $kegiatan[0]['panduan_integer'] ?>/file_informasi"
                    class="btn btn-primary ">Download File</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($lomba as $data) { ?>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Blog -->
                <div class="single-blog res-margin">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb t-cards">
                        <img class="lazyload"
                            data-src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_lomba/<?= $data['icon_lomba_integer'] ?>"
                            src="<?= base_url() ?>assets/upload/Folder_integer_website/icon_lomba/<?= $data['icon_lomba_integer'] ?>"
                            alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content p-4">
                        <!-- Meta Info -->
                        <p>Kategori <?= $data['nama_kategori_lomba_integer'] ?></p>
                        <!-- Blog Title -->
                        <h3 class="blog-title my-3"><?= $data['nama_lomba_integer'] ?></h3>
                        <p><?= $data['deskripsi_lomba_integer'] ?></p>
                        <?php
                            $start = new Datetime(date('Y-m-d H:i:s'));
                            $mulai = new Datetime($data['waktu_mulai_pendaftaran']);
                            $akhir = new Datetime($data['waktu_akhir_pendaftaran']);
                            $kumpul_mulai = new Datetime($data['waktu_awal_pengumpulan']);
                            $kumpul_akhir = new Datetime($data['waktu_akhir_pengumpulan']);
                            $waktu_mulai = $start->diff($mulai);
                            $waktu_akhir = $start->diff($akhir);
                            $waktu_mulai_kumpul = $start->diff($kumpul_mulai);
                            $waktu_akhir_kumpul = $start->diff($kumpul_akhir);
                            ?>

                        <!-- CEK APAKAH DATA KOSONG -->
                        <?php if (!empty($data['waktu_awal_pengumpulan'] && !empty($data['waktu_akhir_pengumpulan'])) && $data['pengumpulan_proposal'] == 1) { ?>

                        <!-- CEK WAKTU PENDAFTARAN -->
                        <?php if (date('Y-m-d H:i:s') < $data['waktu_mulai_pendaftaran']) { ?>
                        <!-- CEK JIKA KURANG DARI WAKTU PENDAFTARAN -->
                        <a href="#" data-toggle="modal" data-target="#devModal" class="btn btn-primary mt-3">Tahap
                            Pendaftaran</a>
                    </div>
                    <div class="reviewer media bg-gray p-4">
                        <!-- Reviewer Thumb -->
                        <div class="reviewer-meta media-body text-center ml-4">
                            <h6 class="text-secondary fw-6">Dimulai dalam <?= $waktu_mulai->d ?> hari
                                <?= $waktu_mulai->h ?> jam <?= $waktu_mulai->i ?>
                                menit</h6>
                        </div>
                    </div>
                    <?php } else if (date('Y-m-d H:i:s') > $data['waktu_akhir_pendaftaran'] && date('Y-m-d H:i:s') < $data['waktu_awal_pengumpulan']) { ?>
                    <a href="#" data-toggle="modal" data-target="#karyaModal" class="btn btn-primary mt-3">Pengumpulan
                        Karya</a>
                </div>
                <div class="reviewer media bg-gray p-4">
                    <!-- Reviewer Thumb -->
                    <div class="reviewer-meta media-body text-center ml-4">
                        <h6 class="text-secondary fw-6">Dimulai dalam <?= $waktu_mulai_kumpul->d ?> hari
                            <?= $waktu_mulai_kumpul->h ?> jam <?= $waktu_mulai_kumpul->i ?>
                            menit</h6>
                    </div>
                </div>
                <?php } else if (date('Y-m-d H:i:s') >= $data['waktu_mulai_pendaftaran'] && date('Y-m-d H:i:s') <= $data['waktu_akhir_pendaftaran']) { ?>

                <a href="<?= $data['pendaftaran_lomba_integer'] ?>" class="btn btn-primary mt-3">Daftar
                    Sekarang</a>
            </div>
            <div class="reviewer media bg-gray p-4">
                <!-- Reviewer Thumb -->
                <div class="reviewer-meta media-body text-center ml-4">
                    <h6 class="text-secondary fw-6">Berakhir dalam <?= $waktu_akhir->d ?> hari
                        <?= $waktu_akhir->h ?> jam <?= $waktu_akhir->i ?>
                        menit</h6>
                </div>
            </div>

            <?php } else if (date('Y-m-d H:i:s') >= $data['waktu_awal_pengumpulan'] && date('Y-m-d H:i:s') <= $data['waktu_akhir_pengumpulan']) { ?>

            <a href="<?= $data['pengumpulan_lomba_integer'] ?>" class="btn btn-primary mt-3">Kumpul
                Proposal</a>
        </div>
        <div class="reviewer media bg-gray p-4">
            <!-- Reviewer Thumb -->
            <div class="reviewer-meta media-body text-center ml-4">
                <h6 class="text-secondary fw-6">Berakhir dalam <?= $waktu_akhir_kumpul->d ?> hari
                    <?= $waktu_akhir_kumpul->h ?> jam <?= $waktu_akhir_kumpul->i ?>
                    menit</h6>
            </div>
        </div>

        <?php } else { ?>
        <a href="#" data-toggle="modal" data-target="#pengumumanModal" class="btn btn-primary mt-3">Tahap Penyisihan</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Pengumpulan Karya Telah Berakhir</h6>
        </div>
    </div>

    <?php }
                            } else { ?>
    <?php if (date('Y-m-d H:i:s') < $data['waktu_mulai_pendaftaran']) { ?>

    <a href="#" data-toggle="modal" data-target="#devModal" class="btn btn-primary mt-3">Tahap Pendaftaran</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Dimulai dalam <?= $waktu_mulai->d ?> hari
                <?= $waktu_mulai->h ?> jam <?= $waktu_mulai->i ?>
                menit</h6>
        </div>
    </div>
    <?php } else if (date('Y-m-d H:i:s') >= $data['waktu_mulai_pendaftaran'] && date('Y-m-d H:i:s') <= $data['waktu_akhir_pendaftaran']) { ?>

    <a href="<?= $data['pendaftaran_lomba_integer'] ?>" class="btn btn-primary mt-3">Daftar
        Sekarang</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Berakhir dalam <?= $waktu_akhir->d ?> hari
                <?= $waktu_akhir->h ?> jam <?= $waktu_akhir->i ?>
                menit</h6>
        </div>
    </div>
    <?php } else { ?>
    <a href="#" data-toggle="modal" data-target="#akhirModal" class="btn btn-primary mt-3">Tahap Penyisihan</a>
    </div>
    <div class="reviewer media bg-gray p-4">
        <!-- Reviewer Thumb -->
        <div class="reviewer-meta media-body text-center ml-4">
            <h6 class="text-secondary fw-6">Pendaftaran Lomba Telah Berakhir
            </h6>
        </div>
    </div>
    <?php }
                            } ?>


    </div>
    </div>
    <?php } ?>
    </div>
    </div>
</section>
<!-- ***** Lomba Area End ***** -->

<!--====== Height Emulator Area Start ======-->
<div class="height-emulator d-none d-lg-block"></div>
<!--====== Height Emulator Area End ======-->

<!--====== Modal Developer Area Start ======-->
<div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="devModalLabel">Pemberitahuan</h4>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p>Tahap pendaftaran lomba belum dimulai, silahkan unduh buku panduan lomba serangkaian kegiatan
                    <?= strtoupper($kegiatan[0]['nama_integer']) ?> pada laman <a
                        href="<?= base_url() ?>integer/kabar_integer"><span class="text-primary">Kabar
                            Integer</span></a> guna mempermudah Anda dalam mempersiapkan keperluan berkas pendaftaran
                    dan
                    mekanisme perlombaan nantinya. Untuk informasi lebih lanjut dapat menghubungi akun instagram HMJ TI
                    Undiksha ( <span class="text-primary">@integer.hmjtiundiksha</span> ) </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="karyaModal" tabindex="-1" role="dialog" aria-labelledby="karyaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="karyaModalLabel">Pemberitahuan</h4>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p>Tahap pengumpulan karya belum dimulai, silahkan unduh buku panduan lomba serangkaian kegiatan
                    <?= strtoupper($kegiatan[0]['nama_integer']) ?> pada laman <a
                        href="<?= base_url() ?>integer/kabar_integer"><span class="text-primary">Kabar
                            Integer</span></a> guna mempermudah Anda dalam mempersiapkan keperluan pada pengumpulan
                    karya
                    dan
                    mekanisme perlombaan nantinya. Setiap perlombaan memiliki mekanisme yang berbeda, silahkan baca
                    baik-baik buku panduan yang diberikan.Untuk informasi lebih lanjut dapat menghubungi akun instagram
                    HMJ TI
                    Undiksha ( <span class="text-primary">@integer.hmjtiundiksha</span> )</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pengumumanModal" tabindex="-1" role="dialog" aria-labelledby="pengumumanModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="pengumumanModalLabel">Pemberitahuan</h4>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p>Tahap pengumpulan karya sudah berakhir, pengumuman peserta yang lolos ke babak final akan diumumkan
                    melalui laman <a href="<?= base_url() ?>integer/kabar_integer"><span class="text-primary">Kabar
                            Integer</span></a> pada tanggal yang sudah ditentukan. Untuk informasi lebih lanjut dapat
                    menghubungi akun instagram
                    HMJ TI
                    Undiksha ( <span class="text-primary">@integer.hmjtiundiksha</span> )</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="akhirModal" tabindex="-1" role="dialog" aria-labelledby="akhirModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="akhirModalLabel">Pemberitahuan</h4>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p>Lomba yang anda pilih tidak memerlukan pengumpulan karya, selamat berlomba kami ucapkan. Untuk
                    mengikuti perkembangan terkait lomba serangkaian kegiatan
                    <?= strtoupper($kegiatan[0]['nama_integer']) ?>, dapat diakses pada laman <a
                        href="<?= base_url() ?>integer/kabar_integer"><span class="text-primary">Kabar
                            Integer</span></a> . Informasi dan Pertanyaan lebih
                    lanjut dapat
                    menghubungi akun instagram
                    HMJ TI
                    Undiksha ( <span class="text-primary">@integer.hmjtiundiksha</span> )</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>