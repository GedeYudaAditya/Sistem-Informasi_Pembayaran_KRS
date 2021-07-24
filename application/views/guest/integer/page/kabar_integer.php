<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                    <h3 class="text-white">Berita Seputar <?= strtoupper($kegiatan[0]['nama_integer']) ?></h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>integer/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>integer/kabar_integer">Kabar Integer</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->
<!-- ***** Blog Area Start ***** -->
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="row">
            <?php foreach ($berita as $data) { ?>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Blog -->
                <div class="single-blog res-margin">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb">
                        <img class="lazyload"
                            data-src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $data['foto1_berita_integer'] ?>"
                            src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $data['foto1_berita_integer'] ?>"
                            alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content p-4">
                        <!-- Meta Info -->
                        <ul class="meta-info d-flex justify-content-between">
                            <li>
                                <?php if ($data['kategori_berita_integer'] == 2) { ?>
                                Pengumuman
                                <?php } else { ?>
                                Berita Integer
                                <?php } ?>
                            </li>
                            <li><?php
                                    $daftar_hari = array(
                                        'Sunday' => 'Minggu',
                                        'Monday' => 'Senin',
                                        'Tuesday' => 'Selasa',
                                        'Wednesday' => 'Rabu',
                                        'Thursday' => 'Kamis',
                                        'Friday' => 'Jumat',
                                        'Saturday' => 'Sabtu'
                                    );
                                    $data_tanggal =  $data['create_at'];
                                    $hari = date('l', strtotime($data_tanggal));
                                    $tanggal = date('d M Y', strtotime($data_tanggal));
                                    echo $daftar_hari[$hari] . ", " . $tanggal;
                                    ?>
                            </li>
                        </ul>
                        <!-- Blog Title -->
                        <h3 class="blog-title my-3"><?= ucwords($data['nama_berita_integer']) ?></h3>
                        <p class="text-justify"><?php
                                                    echo (str_word_count($data['konten_berita_integer']) > 20 ? substr($data['konten_berita_integer'], 0, 200) . "... <br>" : $data['konten_berita_integer'])
                                                    ?></p>
                        <a href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data['id_berita_integer'] ?>"
                            class="blog-btn mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->