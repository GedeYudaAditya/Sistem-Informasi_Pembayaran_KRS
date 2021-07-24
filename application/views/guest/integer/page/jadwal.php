        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h3 class="text-white">Susunan Acara Umum <?= strtoupper($kegiatan[0]['nama_integer']) ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Lomba Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="container">
                <div class="row">
                    <?php
                    $i = 1;
                    foreach ($hari as $data) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog res-margin">
                            <?php if ($data['nama_hari_integer'] == date('Y-m-d')) { ?>
                            <div class="reviewer media bg-primary p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-meta media-body text-center ml-4">
                                    <h6 class="text-light fw-6">Sedang Berlangsung
                                </div>
                            </div>
                            <?php } else if ($data['nama_hari_integer'] < date('Y-m-d')) { ?>
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-meta media-body text-center ml-4">
                                    <h6 class="text-secondary fw-6">Berakhir
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="reviewer media bg-gray p-4">
                                <!-- Reviewer Thumb -->
                                <div class="reviewer-meta media-body text-center ml-4">
                                    <h6 class="text-secondary fw-6">Upcoming
                                </div>
                            </div>
                            <?php } ?>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <p>Hari Ke - <?= $i++ ?></p>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3">
                                    <?php
                                        $daftar_hari = array(
                                            'Sunday' => 'Minggu',
                                            'Monday' => 'Senin',
                                            'Tuesday' => 'Selasa',
                                            'Wednesday' => 'Rabu',
                                            'Thursday' => 'Kamis',
                                            'Friday' => 'Jumat',
                                            'Saturday' => 'Sabtu'
                                        );
                                        $data_tanggal =  $data['nama_hari_integer'];
                                        $hari = date('l', strtotime($data_tanggal));
                                        $tanggal = date('d F Y', strtotime($data_tanggal));
                                        echo $daftar_hari[$hari] . ", " . $tanggal;
                                        ?>
                                </h3>
                                <a href="<?= base_url() ?>integer/detail_jadwal_integer/<?= $data['id_hari_integer'] ?>"
                                    class="btn btn-primary mt-3">Lihat Jadwal</a>
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->