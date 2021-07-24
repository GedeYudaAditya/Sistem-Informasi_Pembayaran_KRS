<div class="main">
    <!-- ***** Header Start ***** -->
    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="<?= base_url() ?>/eors/home">
                <img class="navbar-brand-regular lazyload" src="<?= base_url() ?>assets/img/logo/NAV.png"
                    data-src="<?= base_url() ?>assets/img/logo/NAV.png" alt="brand-logo" />
                <img class="navbar-brand-sticky lazyload" data-src="<?= base_url() ?>assets/img/logo/NAV.png"
                    src="<?= base_url() ?>assets/img/logo/NAV.png" alt="sticky brand-logo" />
            </a>
        </div>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                        <h3 class="text-white">Hasil Seleksi <?= $kegiatan[0]['nama_kegiatan'] ?></h3>
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
                <div class="col-12 col-lg-8 mb-5">

                    <div class="table-responsive">
                        <table class="table" id="tableInformasi">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="row">Nim Pendaftar</th>
                                    <th scope="row">Nama Pendaftar</th>
                                    <th scope="row">Prodi</th>
                                    <th scope="row">Angkatan</th>
                                    <th scope="row">Jenis Kelamin</th>
                                    <th scope="row">Diterima di</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kelulusan as $data) { ?>
                                <tr>
                                    <td scope="row"><?= $data['nim'] ?></td>
                                    <td><?= $data['nama_lengkap'] ?></td>
                                    <?php if ($data['prodi'] == "05") { ?>
                                    <td>Pendidikan Teknik Informatika</td>
                                    <?php } else if ($data['prodi'] == "02") { ?>
                                    <td>Manajemen Informatika</td>
                                    <?php } else if ($data['prodi'] == "09") { ?>
                                    <td>Sistem Informasi</td>
                                    <?php } else if ($data['prodi'] == "10") { ?>
                                    <td>Ilmu Komputer</td>
                                    <?php } else { ?>
                                    <td>Error</td>
                                    <?php } ?>
                                    <td><?= $data['angkatan'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['diterima_di'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <aside class="sidebar">
                        <!-- Tentang Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion3">Tentang Kegiatan
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion3" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <?= $kegiatan[0]['deskripsi'] ?>
                                        <p style="text-align:justify">Adapun persyaratan agar dapat mengikuti
                                            kepanitiaan ini adalah</p>
                                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                                            data-target="#staticBackdrop">
                                            Syarat dan ketentuan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion4">live count
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion4" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <!-- chart Pie -->
                                        <p>Berdasarkan Program Studi</p>
                                        <div>
                                            <div class="chart-pie pt-4 pb-2">
                                                <input type="hidden" value="<?= $PTI ?>" id="PTI">
                                                <input type="hidden" value="<?= $SI ?>" id="SI">
                                                <input type="hidden" value="<?= $MI ?>" id="MI">
                                                <input type="hidden" value="<?= $ILKOM ?>" id="Ilkom">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                            <div class="mt-4 text-center small">
                                                <span class="mr-2">
                                                    Berdasarkan Prodi :
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-primary"></i> PTI
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-success"></i> SI
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-info"></i> MI
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-warning"></i> Ilkom
                                                </span>
                                            </div>

                                            <!-- chart bar-->
                                            <p class="mt-4 mb-2">Berdasarkan Angkatan</p>
                                            <div class="chart-pie pt-4 pb-2">
                                                <input type="hidden" value="<?= $thn_2018 ?>" id="thn_2018">
                                                <input type="hidden" value="<?= $thn_2019 ?>" id="thn_2019">
                                                <input type="hidden" value="<?= $thn_2020 ?>" id="thn_2020">
                                                <canvas id="myAngkatanChart"></canvas>
                                            </div>
                                            <div class="mt-4 text-center small">
                                                <span class="mr-2">
                                                    Berdasarkan Angkatan :
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-primary"></i> 2018
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-success"></i> 2019
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-info"></i> 2020
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bug Widget -->
                        <div class="single-widget">
                            <!-- Post Widget -->
                            <div class="accordions widget post-widget" id="post-accordion">
                                <div class="single-accordion">
                                    <h5>
                                        <a role="button" class="collapse show text-uppercase d-block p-3"
                                            data-toggle="collapse" href="#accordion2">BUG
                                        </a>
                                    </h5>
                                    <!-- Post Widget Content -->
                                    <div id="accordion2" class="accordion-content widget-content collapse show p-3"
                                        data-parent="#post-accordion">
                                        <p>
                                            Jika menemukan masalah pada website silahkan hubungi admin
                                            via <span class="text-primary font-weight-bold">WhatsApp</span> dengan
                                            mengklik tombol dibawah.
                                        </p>
                                        <a href="https://api.whatsapp.com/send?phone=6281915656865&text=Terdapat%20masalah%20pada%20website%20pendaftaran,%20mhon%20bantuannya%20untuk%20memperbaiki"
                                            class="btn btn-primary mt-3" data-target="#staticBackdrop">
                                            Hubungi
                                        </a>
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
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Syarat dan Ketentuan</h5>
                </div>
                <div class="modal-body">
                    <div id="list-style" class="pl-3">
                        <?= $kegiatan[0]['persyaratan'] ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
                </div>
            </div>
        </div>
    </div>
    <!--====== Footer Area Start ======-->
    <footer class="section inner-footer bg-gray ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <!-- Footer Items -->
                    <div class="footer-items text-center">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">
                            <img class="logo lazyload" src="<?= base_url() ?>assets/img/logo/NAV.png"
                                data-src="<?= base_url() ?>assets/img/logo/NAV.png" alt="">
                        </a>
                        <p class="mt-2 mb-3">Seluruh konten dibuat dan diunggah oleh Himpunan Mahasiswa Jurusan
                            Teknik Informatika Undiksha.</p>
                        <!-- Copyright Area -->
                        <div class="copyright-area border-0 pt-3">
                            &copy; Copyrights <?= date("Y"); ?> HMJ TI Undiksha. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->
</div>