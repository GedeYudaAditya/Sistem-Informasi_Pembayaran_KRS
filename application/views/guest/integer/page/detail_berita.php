    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3 class="text-white">Detail Berita Seputar <?= strtoupper($kegiatan[0]['nama_integer']) ?>
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>web/home">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>web/pengumuman">Kabar Integer</a></li>
                            <li class="breadcrumb-item active">Detail Berita</li>
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
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Details -->
                    <article class="single-blog-details">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if (!empty($detail[0]['youtube_berita_integer'])) { ?>
                                    <div class="carousel-item" data-interval="10000" data-touch="true">
                                        <div class="embed-responsive embed-responsive-16by9 d-block w-10">
                                            <?= $detail[0]['youtube_berita_integer']; ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="carousel-item active" data-interval="2000" data-touch="true">
                                        <img src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $detail[0]['foto1_berita_integer']; ?>"
                                            data-src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $detail[0]['foto1_berita_integer']; ?>"
                                            class="d-block w-100 lazyload" alt="">
                                    </div>
                                    <?php if (!empty($detail[0]['foto2_berita_integer'])) { ?>
                                    <div class="carousel-item" data-touch="true">
                                        <img src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $detail[0]['foto2_berita_integer']; ?>"
                                            data-src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $detail[0]['foto2_berita_integer']; ?>"
                                            class="d-block w-100 lazyload" alt="">
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($detail[0]['foto3_berita_integer'])) { ?>
                                    <div class="carousel-item" data-touch="true">
                                        <img src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $detail[0]['foto3_berita_integer']; ?>"
                                            data-src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $detail[0]['foto3_berita_integer']; ?>"
                                            class="d-block w-100 lazyload" alt="">
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content sApp-blog">
                            <!-- Meta Info -->
                            <div class="meta-info d-flex flex-wrap align-items-center py-2">
                                <ul>
                                    <li class="d-inline-block p-2">
                                        <?php if ($detail[0]['kategori_berita_integer'] == 2) { ?>
                                        Pengumuman
                                        <?php } else { ?>
                                        Berita Integer
                                        <?php } ?>
                                    </li>
                                    <li class="d-inline-block p-2">Diupload oleh <?= $detail[0]['create_by'] ?></li>
                                    <li class="d-inline-block p-2"><?php
                                                                    $daftar_hari = array(
                                                                        'Sunday' => 'Minggu',
                                                                        'Monday' => 'Senin',
                                                                        'Tuesday' => 'Selasa',
                                                                        'Wednesday' => 'Rabu',
                                                                        'Thursday' => 'Kamis',
                                                                        'Friday' => 'Jumat',
                                                                        'Saturday' => 'Sabtu'
                                                                    );
                                                                    $data_tanggal =  $detail[0]['create_at'];
                                                                    $hari = date('l', strtotime($data_tanggal));
                                                                    $tanggal = date('d M Y', strtotime($data_tanggal));
                                                                    echo $daftar_hari[$hari] . ", " . $tanggal;
                                                                    ?>
                                    </li>
                                    <?php if (!empty($detail[0]['file_berita_integer'])) { ?>
                                    <li class="d-inline-block p-2"><a
                                            href="<?= base_url() ?>integer/download_file_informasi_integer/<?= $detail[0]['file_berita_integer'] ?>/pakekpengaman">Download</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- Blog Details -->
                            <div class="blog-details">
                                <h3 class="blog-title py-2 py-sm-3"><?= ucwords($detail[0]['nama_berita_integer']) ?>
                                </h3>
                                <?= $detail[0]['konten_berita_integer'] ?>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-3">
                    <aside class="sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion2">Postingan terbaru
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion2" class="accordion-content widget-content collapse show"
                                        data-parent="#post-accordion">
                                        <!-- Post Widget Items -->
                                        <ul class="widget-items">
                                            <?php foreach ($berita as $data) : ?>
                                            <li>
                                                <a href="<?= base_url() ?>integer/detail_kabar_integer/<?= $data['id_berita_integer'] ?>"
                                                    class="single-post align-items-center align-items-lg-start media p-3">
                                                    <!-- Post Thumb -->
                                                    <div class="post-thumb avatar-md">
                                                        <img class="align-self-center lazyload"
                                                            src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $data['foto1_berita_integer']; ?>"
                                                            data-src="<?= base_url() ?>assets/upload/Folder_integer_website/berita/foto/<?= $data['foto1_berita_integer']; ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="post-content media-body pl-3">
                                                        <p class="post-date mb-2">
                                                            <?php if ($data['kategori_berita_integer'] == 2) { ?>
                                                            Pengumuman
                                                            <?php } else { ?>
                                                            Berita Integer
                                                            <?php } ?>
                                                        </p>
                                                        <p class="post-date mb-2"><?php
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
                                                                                        ?></p>
                                                        <h6><?= ucwords($data['nama_berita_integer']); ?></h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->