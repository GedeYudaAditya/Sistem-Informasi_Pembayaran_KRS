<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                    <h3 class="text-white">Berita dan Redaksi Karya Tulis <br> Jurusan Teknik Informatika Undiksha</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>web/home">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>web/berita">Berita</a></li>
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
            <?php foreach ($redaksi as $data) : ?>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Blog -->
                <div class="single-blog res-margin">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb">
                        <img class="lazyload"
                            data-src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $data['foto1_informasi'] ?>"
                            src="<?= base_url() ?>assets/upload/Folder_informasi/foto/<?= $data['foto1_informasi'] ?>"
                            alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content p-4">
                        <!-- Meta Info -->

                        <ul class="meta-info d-flex justify-content-between">
                            <li><?= $data['kategori_informasi'] ?></li>
                            <li><?= $data['create_at'] ?></li>
                        </ul>
                        <!-- Blog Title -->
                        <h3 class="blog-title my-3"><?= $data['judul_informasi'] ?></h3>
                        <?php
                            echo (str_word_count($data['konten_informasi']) > 20 ? substr($data['konten_informasi'], 0, 200) . "... <br>" : $data['konten_informasi'])
                            ?>

                        <a href="<?= base_url() ?>web/detail_berita/<?= $data['id_informasi'] ?>"
                            class="blog-btn mt-3">Read More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->